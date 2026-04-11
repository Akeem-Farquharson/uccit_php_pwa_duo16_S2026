"use strict";

/* Cache name for version control */
const CACHE_NAME = "ucc-it-app-v1";

/* Offline fallback page */
const OFFLINE_URL = "/offline.html";

/* Core files to cache for offline access */
const filesToCache = [
    "/",
    OFFLINE_URL,
    "/css/app.css",
    "/manifest.json",
    "/images/logo.png",
    "/images/icons/icon-192x192.png",
    "/images/icons/icon-512x512.png"
];

/* Install event - caches essential files */
self.addEventListener("install", (event) => {
    event.waitUntil(
        caches.open(CACHE_NAME).then((cache) => {
            return cache.addAll(filesToCache);
        })
    );
    self.skipWaiting(); // Activate immediately
});

/* Fetch event - serves cached content when offline */
self.addEventListener("fetch", (event) => {
    if (event.request.mode === "navigate") {
        event.respondWith(
            fetch(event.request).catch(() => caches.match(OFFLINE_URL))
        );
        return;
    }

    event.respondWith(
        caches.match(event.request).then((response) => {
            return response || fetch(event.request);
        })
    );
});

/* Activate event - removes old caches */
self.addEventListener("activate", (event) => {
    event.waitUntil(
        caches.keys().then((cacheNames) => {
            return Promise.all(
                cacheNames.map((cacheName) => {
                    if (cacheName !== CACHE_NAME) {
                        return caches.delete(cacheName);
                    }
                })
            );
        })
    );
    self.clients.claim(); // Take control of all pages
});