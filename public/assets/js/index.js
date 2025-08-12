window.addEventListener("DOMContentLoaded", () => {
    let tl = gsap.timeline();

    tl.from("#LeftPart", {
        x: 50,
        duration: 1,
        delay: 0.1,
        opacity: 0,
    });
 
    
    
    tl.from("#ProfileImage", {
        x: 50,
        duration: 1,
        delay: 0.1,
        opacity: 0,
    });


    // Service
    tl.from("#Service", {
        x: 50,
        duration: 1,
        delay: 0.1,
        opacity: 0,
    });
    tl.from("#ServiceDetails", {
        x: 50,
        duration: 1,
        delay: 0.1,
        opacity: 0,
    });
    tl.from("#ServiceCard", {
        y: 50,
        duration: 1,
        delay: 0.1,
        opacity: 0,
    });
    tl.from("#ServiceName", {
        y: 50,
        duration: 1,
        delay: 0.1,
        opacity: 0,
    });
    tl.from("#ServiceDetail", {
        y: 50,
        duration: 1,
        delay: 0.1,
        opacity: 0,
    });


    // About
    tl.from("#About", {
        x: 50,
        duration: 1,
        delay: 0.1,
        opacity: 0,
    });
    tl.from("#AboutShow", {
        x: 50,
        duration: 1,
        delay: 0.1,
        opacity: 0,
    });


     tl.from("#ProfileImage1", {
        x: 50,
        duration: 1,
        delay: 0.1,
        opacity: 0,
    });


    // Portfolio
    tl.from("#Portfolio", {
        x: 50,
        duration: 1,
        delay: 0.1,
        opacity: 0,
    });
    tl.from("#PortfolioCard", {
        y: 50,
        duration: 1,
        delay: 0.1,
        opacity: 0,
    });


    // Contact
    tl.from("#Contact", {
        y: 50,
        duration: 1,
        delay: 0.1,
        opacity: 0,
    });
    tl.from("#ContacDetails", {
        y: 50,
        duration: 1,
        delay: 0.1,
        opacity: 0,
    });

    tl.from("#Contactform", {
        x: 50,
        duration: 1,
        delay: 0.1,
        opacity: 0,
    });


    // footer
    tl.from("#footer", {
        x: 50,
        duration: 1,
        delay: 0.1,
        opacity: 0,
    });
});