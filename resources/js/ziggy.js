const Ziggy = {"url":"http:\/\/trucking.com","port":null,"defaults":{},"routes":{"api.admin.driver.all":{"uri":"api\/admin\/driver","methods":["GET","HEAD"]},"api.admin.driver.store":{"uri":"api\/admin\/driver\/store","methods":["POST"]},"api.admin.driver.update":{"uri":"api\/admin\/driver\/{id}\/update","methods":["POST"]},"admin.driver.index":{"uri":"admin\/driver","methods":["GET","HEAD"]},"admin.driver.create":{"uri":"admin\/driver\/create","methods":["GET","HEAD"]},"admin.driver.edit":{"uri":"admin\/driver\/{id}\/edit","methods":["GET","HEAD"]},"default":{"uri":"\/","methods":["GET","HEAD"]},"dashboard":{"uri":"dashboard","methods":["GET","HEAD"]},"register":{"uri":"register","methods":["GET","HEAD"]},"login":{"uri":"login","methods":["GET","HEAD"]},"password.request":{"uri":"password\/reset","methods":["GET","HEAD"]},"password.email":{"uri":"password\/email","methods":["POST"]},"password.reset":{"uri":"password\/reset\/{token}","methods":["GET","HEAD"]},"password.update":{"uri":"password\/reset","methods":["POST"]},"verification.notice":{"uri":"verify-email","methods":["GET","HEAD"]},"verification.verify":{"uri":"verify-email\/{id}\/{hash}","methods":["GET","HEAD"]},"verification.send":{"uri":"email\/verification-notification","methods":["POST"]},"password.confirm":{"uri":"password\/confirm","methods":["GET","HEAD"]},"logout":{"uri":"logout","methods":["POST"]},"home":{"uri":"home","methods":["GET","HEAD"]}}};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };
