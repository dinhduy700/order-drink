window.Echo.channel('chat')
    .listen('MessageSent', (e) => {
        console.log("New message:", e.user, e.message);
    });
