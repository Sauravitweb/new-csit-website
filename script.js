console.log("script running.......")
document.querySelector('.cross').style.display = 'none';
document.querySelector('.ham').addEventListener("click", ()=>{
    document.querySelector('.sidebar').classList.toggle('sidebargo');
    if(document.querySelector('.sidebar').classList.contains('sidebargo')){
        document.querySelector('.ham').style.display = 'inline';
        
    }
   else {
    
        
    
        document.querySelector('.ham').style.display = 'inline';
}
}
)


document.querySelector('.port').addEventListener("click", ()=>{
    document.querySelector('.sidebar').classList.toggle('sidebargo');
    if(document.querySelector('.sidebar').classList.contains('sidebargo')){
        document.querySelector('.port').style.display = 'inline';
        
    }
   else {
    
        
    
        document.querySelector('.port').style.display = 'inline';
}
}
)

              



    var tablinks = document.getElementsByClassName("tab-links");
    var tabcontents = document.getElementsByClassName("tab-contents");

    function opentab(tabname)
    {
        for(tablink of tablinks)
        {
            tablink.classList.remove("active-link");
        }
        for(tabcontent of tabcontents)
        {
            tabcontent.classList.remove("active-tab");
        }
        event.currentTarget.classList.add("active-link");
        document.getElementById(tabname).classList.add("active-tab");


    }


 document.addEventListener('DOMContentLoaded', () => {
    const tabs = document.querySelectorAll('nav ul li');
    const tabContents = document.querySelectorAll('.tab-content');

    tabs.forEach(tab => {
        let showTimeout, hideTimeout;
        
        tab.addEventListener('mouseenter', function() {
            // Clear any existing hide timeout
            clearTimeout(hideTimeout);
            
            // Hide content of all other tabs immediately
            tabContents.forEach(content => {
                content.classList.remove('show');
            });
            
            // Show content of the hovered tab after 3 seconds
            const content = tab.querySelector('.tab-content');
            if (content) {
                showTimeout = setTimeout(() => {
                    if (tab.matches(':hover')) {
                        content.classList.add('show');
                    }
                }, 3000); // 3 seconds delay before showing
            }
        });

        tab.addEventListener('mouseleave', function() {
            // Clear any existing show timeout
            clearTimeout(showTimeout);

            // Hide content when mouse leaves the tab after 3 seconds
            const content = tab.querySelector('.tab-content');
            if (content) {
                hideTimeout = setTimeout(() => {
                    if (!tab.matches(':hover') && !content.matches(':hover')) {
                        content.classList.remove('show');
                    }
                }, 3000); // 3 seconds delay before hiding
            }
        });

         // Ensures that content remains visible if mouse moves from tab to content
        const content = tab.querySelector('.tab-content');
        if (content) {
            content.addEventListener('mouseenter', function() {
                // Clear any existing hide timeout
                clearTimeout(hideTimeout);
                content.classList.add('show');
            });

            content.addEventListener('mouseleave', function() {
                hideTimeout = setTimeout(() => {
                    if (!tab.matches(':hover') && !content.matches(':hover')) {
                        content.classList.remove('show');
                    }
                }, 3000); // 3 seconds delay before hiding
            });
        }
    });
});

    // Optional: Close all tab contents when clicking outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('nav ul li')) {
            tabContents.forEach(content => {
                content.style.display = 'none';
            });
        }
    });

    // Handle nested options hover effect
    document.querySelectorAll('.option-group').forEach(group => {
        group.addEventListener('mouseenter', () => {
            const nestedOptions = group.querySelector('.nested-options');
            if (nestedOptions) {
                nestedOptions.style.display = 'block';
            }
        });
        group.addEventListener('mouseleave', () => {
            const nestedOptions = group.querySelector('.nested-options');
            if (nestedOptions) {
                nestedOptions.style.display = 'none';
            }
        });
    });
});


 

     
