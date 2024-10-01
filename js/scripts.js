/*!
* Start Bootstrap - Agency v7.0.11 (https://startbootstrap.com/theme/agency)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-agency/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });
    
});

const wwr_FixCircleSize = () => {

    // Get overall height of text panels on the right based on individual height of each <li> tag
    let textPanelOverallHeight = 0;
    let textPanels = document.querySelectorAll('.wwr-item');
    textPanels.forEach(function(panel,index){
        textPanelOverallHeight += panel.offsetHeight;
    });

    // Loops through all circle stacks and changes its size
    let circleStacks = document.querySelectorAll('.circle');
    circleStacks.forEach(function(circle,index){

        // Get CSS-set padding


        // Basically sets the width of the circle same as its height
        let galleryHeight = circle.parentElement.offsetHeight;
        let galleryWidth = circle.parentElement.offsetWidth;
        circle.removeAttribute("style");
        circle.setAttribute("style","height:"+galleryWidth+"px; max-height:"+galleryWidth+"px; max-width:"+galleryWidth+"px");
        
        // set Height of parent
        circle.parentElement.parentElement.setAttribute("style","height:"+galleryWidth+"px;");

    });
    

}

const ourServiceContainerMobile = () => {
    const mobileSize = window.matchMedia("(max-width: 990px)");
    const serviceContainer = document.querySelector('#services #service-container');
    if(mobileSize.matches){
        serviceContainer.classList.remove('container');
        serviceContainer.classList.add('container-fluid');
    }else{
        serviceContainer.classList.remove('container-fluid');
        serviceContainer.classList.add('container');
    }
}


// Gallery Stack Function
const GalleryStack = (parentClass) => {
    

    const galleryParent = document.querySelector(parentClass);
    const imageList = galleryParent.querySelectorAll('.s-img-container');
    const mobileSize = window.matchMedia("(min-width: 768px)");
    let animationDelayInterval = 50;
    let bottomOffset = 1.5;
    let animationDelay = 0;
    let parentHeight = 0;
    let parentBottomMargin = 0;
    
    imageList.forEach(function (stack,index){
        animationDelay = animationDelay + animationDelayInterval;

        // Remove stack class
        for (let i = stack.classList.length - 1; i >= 0; i--) {
            const className = stack.classList[i];
            if (className.startsWith('stack')) {
                // console.log("removed: "+className);
                stack.classList.remove(className);
            }
        }

        if(stack.getAttribute("data-stacknumber")){
            stack.classList.add(stack.getAttribute("data-stacknumber"));
        }else{
            stack.setAttribute("data-stacknumber","stack-"+index);
            stack.classList.add("stack-"+index);
        }

        // if(stack.classList.contains(stack.getAttribute("data-stacknumber"))){
        //     stack.classList.remove("stack-");
        //     stack.classList.add(stack.getAttribute("data-stacknumber"));
        // }

        stack.setAttribute("data-aos-delay",animationDelay);

        // Compute Height of parent
        if(index == 0){
            parentHeight = stack.offsetHeight;
            parentBottomMargin = stack.offsetHeight;
            console.log(parentClass+" - "+parentHeight);
        }else{
            let pixelHeight =  bottomOffset * parseFloat(getComputedStyle(document.documentElement).fontSize);
            parentHeight += pixelHeight;
        }

        // console.log(stack.style);
        // console.log(stack.style.cssText);
        
    });
    parentBottomMargin = parentHeight - parentBottomMargin;
    galleryParent.setAttribute("style","height:"+parentHeight+"px;");

    
      
};


// List of sections that utilizes stack design
GalleryStack(".gallery-parent1");
GalleryStack(".gallery-parent2");
GalleryStack(".gallery-parent3");
wwr_FixCircleSize();

$(window).resize(function () {
    ourServiceContainerMobile();
    GalleryStack(".gallery-parent1");
    GalleryStack(".gallery-parent2");
    GalleryStack(".gallery-parent3");
    wwr_FixCircleSize();
});

const SwitchStack =  (elementSwitch) => {

    const stackElement = elementSwitch;
    const stackContainer = stackElement.parentElement;
    let firstStack = stackContainer.querySelector('.stack-0');
    let currenctStackClass = stackElement.getAttribute('data-stacknumber');
    let currenctFirstStackClass = firstStack.getAttribute('data-stacknumber');

    console.log(currenctStackClass);

    if(currenctFirstStackClass == currenctStackClass) return;

    // Add and remove class to current stack
    stackElement.classList.remove(currenctStackClass);
    stackElement.classList.add(currenctFirstStackClass);

    // Add and remove class to previous first stack
    firstStack.classList.remove(currenctFirstStackClass);
    firstStack.classList.add(currenctStackClass);

    // Replace data attributes of stack
    stackElement.setAttribute("data-stacknumber",currenctFirstStackClass);
    firstStack.setAttribute("data-stacknumber",currenctStackClass);

    firstStack.classList.add('stack-out');
    stackElement.classList.add('stack-down');

    setTimeout(function () { 
        stackElement.classList.remove('stack-down');
        firstStack.classList.remove('stack-out');
    }, 1000);

}

$('#services .accordion-button').click(function(){

    let referredStack = this.getAttribute('data-stack');
    let stack = document.querySelector('[data-accord="'+referredStack+'"]');
    SwitchStack(stack);

});

$('#whoweare .wwr-item').hover(function(){

    let referredStack = this.getAttribute('data-stack');
    let stack = document.querySelector('[data-accord="'+referredStack+'"]');
    SwitchStack(stack);

});

const GenerateBackgroundBlur = () => {

    let blurContainer = document.querySelectorAll('.blurred-background');

    blurContainer.forEach(function(container,index){
        
        let image = container.querySelector('img');
        let nonAbsoluteblurClass = "blur-background_non_absolute";
        let absoluteBlurClass = "blur-background_absolute";

    
        // Removes previously generated blur if there is any
        let existingBlur = document.querySelectorAll('.blur-background');
        existingBlur.forEach(function(blur,index){
            blur.remove();
        });

        // Create image element
        let imageURL = image.getAttribute("src");
        let imageElement = document.createElement("img");
        imageElement.setAttribute("src",imageURL);
        
        // Add class and adjust depending on container's position css
        if($(container).css("position") == "absolute"){
            imageElement.classList.add(nonAbsoluteblurClass);
        }else{
            imageElement.classList.add(absoluteBlurClass);
        }

        // Append new blurred image as background
        container.append(imageElement);

    })

}

GenerateBackgroundBlur();



  
