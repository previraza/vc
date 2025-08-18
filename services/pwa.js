if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/serviceWorker.js', {
        scope: '/app/'
    }).then(function(registration) {
        var serviceWorker;
        if (registration.installing) serviceWorker = registration.installing;
        else if (registration.waiting) serviceWorker = registration.waiting;
        else if (registration.active) serviceWorker = registration.active;

        if (serviceWorker) {
            console.info("ServiceWorker " + serviceWorker.state);
            serviceWorker.addEventListener('statechange', function(e) {
                console.info("ServiceWorker " + e.target.state);
            });
            if (!('Notification' in window)) return console.error('You don\'t have a notification system!');
            if (!(permission = document.getElementById('dataNotification'))) return;

            var askPermission = async function() {
                    if (Notification.permission === 'default') {
                        const permission = await Notification.requestPermission();
                    }
                    if (Notification.permission === 'granted') {
                        registerServiceWorker();
                    }
                },
                registerServiceWorker = async function() {
                    let suscription = await registration.pushManager.getSubscription();
                    if (suscription)
                        return suscription;
                    suscription = await registration.pushManager.subscribe({
                        userVisibleOnly: true,
                        applicationServerKey: await getPublicKey()
                    });
                    await saveSubscription(subscribe);
                },
                getPublicKey = async function() {
                    const { key } = await fetch('push/key', {
                        headers: {
                            Accept: 'application/json'
                        }
                    }).then(r => r.json())
                    return key;
                },
                saveSubscription = async function(subscribe) {
                    await fetch('push/subscribe', {
                        method: 'post',
                        headers: {
                            'Content-Type': 'application/json',
                            Accept: 'application/json'
                        },
                        body: JSON.stringfy(subcription)
                    })
                };

            permission.addEventListener('click', askPermission);
        }
    }).catch(function(error) {
        console.error("Une erreur est survenue lors de l'installation du service worker.");
        console.error(error);
    });
} else {
    console.info("Votre navigateur ne prend pas en charge le service worker.")
}