// Started ServiceWorker
const CACHE_NAME = "MINE_CACHES_V2";
const CACHE_FILES = [
    "/app/?b557c222c8ddcdf87e033706aad08e4ef7cf90d3=errors--offline", "/", "/app", "/layouts/default/img/preloader.gif", "/layouts/default/css/normalize.css", "/layouts/default/fonts/remixicon.css", "/layouts/default/css/main.css", "/layouts/default/css/bootstrap.min.css", "/layouts/default/css/all.min.css", "/layouts/default/fonts/flaticon.css", "/layouts/default/css/animate.min.css", "/layouts/default/css/datepicker.min.css", "/layouts/default/css/fullcalendar.min.css", "/layouts/default/css/select2.min.css", "/layouts/default/css/jquery.dataTables.min.css", "/layouts/default/css/style.css", "/layouts/default/css/paluku.css"
];

// Initialisation of Cache
self.addEventListener('install', e => {
    self.skipWaiting();
    e.waitUntil(
        caches.open(CACHE_NAME).then(cache => {
            cache.addAll(CACHE_FILES);
        })
    )
});

// Removed Cache 
self.addEventListener('activate', (e) => {
    clients.claim();
    e.waitUntil(
        caches.keys().then((keys) => {
            return Promise.all(
                keys.filter((key) => key !== CACHE_NAME).map(key => caches.delete(key))
            )
        })
    )
})

// Removed Cache 
self.addEventListener('push', (e) => {
    const data = e.data ? e.data.json() : {};
    self.registration.showNotificarion(data.title, {
        body: data.message,
        data: data
    })
})

// On Fetch
self.addEventListener('fetch', (e) => {
    if (e.request.mode === 'navigate') {
        e.respondWith((async() => {
            try {
                const preloadResponse = await e.preloadResponse
                if (preloadResponse) return preloadResponse;
                return await fetch(e.request);
            } catch (err) {
                return await caches.match((e.request.url === 'http://localhost:84/app/?') ? '/app/' : '/app/?b557c222c8ddcdf87e033706aad08e4ef7cf90d3=errors--offline');
            }
        })());
    } else {
        e.respondWith(
            caches.match(e.request).then(function(response) {
                if (response) {
                    fetch(e.request.clone()).then((networkResponse) => {
                        caches.open(CACHE_NAME).then(function(cache) {
                            cache.put(e.request, networkResponse.clone());
                        })
                    });
                    return response;
                }

                var fetchRequest = e.request.clone();
                return fetch(fetchRequest).then(function(response) {
                    if (!response || response.status !== 200 || response.type !== "basic") return response;
                    var responseToCache = response.clone();
                    caches.open(CACHE_NAME).then(function(cache) {
                        if (e.request.method !== 'POST') cache.put(e.request, responseToCache);
                    })
                    return response;
                }).catch((err) => {
                    console.log(err, fetchRequest.url)
                });
            })
        );
    }
});