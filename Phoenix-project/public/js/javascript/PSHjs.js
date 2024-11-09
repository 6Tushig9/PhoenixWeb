// let menuToggle=document.querySelector('.mnubtn');
// const mobilemenu=document.getElementsByClassName('mblMenu');

// menuToggle.onclick = function(){
//     menuToggle.classList.toggle('active')

//     /*for (let i = 0; i < mobilemenu.length; i++) {
//         if (mobilemenu[i].style.display === 'flex')
//             {mobilemenu[i].style.display = 'none';}
//         else { mobilemenu[i].style.display = 'flex';}
//     }*/
//    for (let i = 0; i < mobilemenu.length; i++) {
//         mobilemenu[i].classList.toggle('show');
//     };
// };
document.addEventListener("DOMContentLoaded", function () {
    let menuToggle = document.querySelector(".mnubtn");
    const mobilemenu = document.getElementsByClassName("mblMenu");

    menuToggle.onclick = function () {
        menuToggle.classList.toggle("active");
        for (let i = 0; i < mobilemenu.length; i++) {
            mobilemenu[i].classList.toggle("show");
        }
    };
});

// img click home page
document.addEventListener("DOMContentLoaded", function () {
    const imgClick = document.querySelector(".MenuLogo");
    if (imgClick) {
        imgClick.addEventListener("click", function () {
            window.location.href = "./PhoenixSheater";
        });
    }
});

//scroll hiihed menu heseg garch ireh method
document.addEventListener("DOMContentLoaded", function () {
    let lastScrollTop = 0;
    const navbar = document.querySelector(".navi");
    const mblnavbar = document.querySelector(".mblMenu");

    window.addEventListener("scroll", function () {
        let scrollTop = window.scrollY || document.documentElement.scrollTop;
        if (scrollTop > lastScrollTop) {
            // Downscroll
            if (navbar) navbar.classList.add("hidden");
            if (mblnavbar) mblnavbar.classList.add("hidden");
        } else {
            // Upscroll
            if (navbar) navbar.classList.remove("hidden");
            if (mblnavbar) mblnavbar.classList.remove("hidden");
        }
        lastScrollTop = scrollTop;
    });
});

//buypage deh heater songoltiin function()
document.addEventListener("DOMContentLoaded", function () {
    const selections = document.querySelectorAll(".selections");
    selections.forEach(function (selection) {
        selection.addEventListener("click", function () {
            // Remove the border from all selections
            selections.forEach(function (otherSelection) {
                otherSelection.style.border = "2px solid var(--shadowClr)";
            });
            // Add the border to the clicked selection
            selection.style.border = "2px solid #2d2d2d";
        });
    });
});

//buypage deh jijig zurag songolt
document.addEventListener("DOMContentLoaded", function () {
    const littleIMGs = document.querySelectorAll(".mnimgs");
    const container = document.querySelector(".image-container");

    littleIMGs.forEach((littleIMG) => {
        littleIMG.addEventListener("click", (event) => {
            event.preventDefault(); // Prevent default action
            // Reset all images' styles
            littleIMGs.forEach((img) => {
                img.classList.remove("selected");
            });
            // Set clicked image's styles
            littleIMG.classList.add("selected");
            centerImage(littleIMG); // Center the clicked image
        });

        // Allow keyboard navigation
        littleIMG.addEventListener("keydown", (event) => {
            if (event.key === "Enter") {
                littleIMG.click();
            }
        });
    });

    function centerImage(image) {
        const index = Array.from(littleIMGs).indexOf(image); // Get index of clicked image
        const imageWidth =
            image.offsetWidth + parseFloat(getComputedStyle(image).marginRight); // Include margin
        const scrollPosition = index * imageWidth; // Calculate the scroll position to center the image

        // Center the image with transform
        const offset = container.offsetWidth / 2 - imageWidth / 2; // Centering offset
        container.style.transform = `translateX(-${scrollPosition - offset}px)`; // Center the image
    }
});




//effect for carousel
document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".slide-content", {
        slidesPerView: 3,
        spaceBetween: 25,
        loop: true,
        centerSlide: "true",
        fade: "true",
        grabCursor: "true",
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            900: {
                slidesPerView: 2,
            },
            1400: {
                slidesPerView: 3,
            },
        },
    });
});

//ene hesegt advice page deh medeellig delgerengui uzeh bolon haahad zoriulagdsan code bgaa
function toggleContent(button) {
    var card = button.closest(".cardd");
    var content = card.querySelector(".advice-content");
    var image = card.querySelector("img");

    if (content.style.overflow === "visible") {
        button.innerHTML = "Дэлгэрэнгүй...";
        content.style.overflow = "hidden";
        content.style.height = "50px";

        // Reset to original styles
        card.style.display = "flex";
        image.style.maxWidth = "280px"; // Original max width
        image.style.width = "35vw"; // Original width
        image.style.height = "380px"; // Original height
        image.style.objectFit = "cover"; // Original fit
        image.style.marginLeft = "-60px";
        image.style.marginRight = "80px";
    } else {
        button.innerHTML = "Нуух";
        content.style.overflow = "visible";
        content.style.height = "auto";

        // Adjust image to look more natural at the top
        card.style.display = "block"; // Stack content vertically
        image.style.maxWidth = "50%"; // Allow image to take full width
        image.style.width = "100%"; // Full width of container
        image.style.height = "280px"; // Adjust height naturally
        image.style.objectFit = "fit"; // Ensure image is not cropped
        image.style.marginLeft = "auto"; // Center horizontally
        image.style.marginRight = "auto"; // Center horizontally
        image.style.display = "block"; // Ensure the image is block element
    }
}


//buyPage ruu shiljih code
document.addEventListener("DOMContentLoaded", function () {
    const buypageJump2 = document.querySelectorAll(".VMore");
    const buyPageJump = document.querySelector(".fnctbtn");
    buypageJump2.forEach(function (element) {
        element.addEventListener("click", function () {
            window.location.href = "/BuyPage";
        });
    });
    if (buyPageJump) {
        buyPageJump.addEventListener("click", function () {
            window.location.href = "/BuyPage";
        });
    }
});

//shoppingCart code
document.addEventListener("DOMContentLoaded", function () {
    document
        .getElementById("complaintBtn")
        .addEventListener("click", function () {
            document.getElementById("complaintPopup").style.display = "flex";
            document.body.classList.add("no-scroll");
        });
    document
        .getElementById("closeComplaintPopup")
        .addEventListener("click", function () {
            document.getElementById("complaintPopup").style.display = "none";
            document.body.classList.remove("no-scroll");
        });
    window.addEventListener("click", function (event) {
        const popup = document.getElementById("complaintPopup");
        if (event.target === popup) {
            popup.style.display = "none";
            document.body.classList.remove("no-scroll");
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    // Attach event listeners to all plus and minus buttons
    document.querySelectorAll(".selectionByOrder").forEach(function (card) {
        // Get the base price from the existing price element
        let priceElement = card.querySelector(".price");
        let basePrice = parseInt(priceElement.innerText.replace(/[^\d]/g, "")); // Extract numeric value

        let quantity = card.querySelector(".quantity");

        // Minus button functionality
        card.querySelector(".minus").addEventListener("click", function () {
            if (quantity.innerText > 1) {
                quantity.innerText = parseInt(quantity.innerText) - 1;
                updatePrice(priceElement, quantity.innerText, basePrice);
            }
        });

        // Plus button functionality
        card.querySelector(".plus").addEventListener("click", function () {
            quantity.innerText = parseInt(quantity.innerText) + 1;
            updatePrice(priceElement, quantity.innerText, basePrice);
        });
    });
    function updatePrice(priceElement, quantity, basePrice) {
        let newPrice = basePrice * quantity;
        priceElement.innerText = `${newPrice}₮`;
    }
    //delete section
    document.querySelectorAll(".close-btn").forEach(function (button) {
        button.addEventListener("click", function () {
            let sectionToRemove = button.closest(".selectionByOrder");
            sectionToRemove.remove();
        });
    });
});

// calculate page code

//------------------------buypage calculation code---------------------//
    document.addEventListener('DOMContentLoaded', function() {
        // Select all mini images
        const miniImages = document.querySelectorAll('.miniImage img');
        const bigImage = document.getElementById('bigImage');

        // Log to check if images are being selected correctly
        console.log('Mini images:', miniImages);
        console.log('Big image:', bigImage);

        // Check if bigImage is found
        if (bigImage) {
            // Add click event listener to each mini image
            miniImages.forEach(miniImage => {
                miniImage.addEventListener('click', function() {
                    // Store the current big image src
                    const currentBigImageSrc = bigImage.src;

                    // Switch the big image src with the clicked mini image src
                    bigImage.src = this.src;

                });
            });
        } else {
            console.error('Big image not found.');
        }

        //JS for medeelel awah heseg 
        // Elements for delivery options and fees
        const hotDotorButton = document.getElementById('HotDotor');
        const salbaraasButton = document.getElementById('Salbaraas');
        const oronNutagButton = document.getElementById('OronNutag');
        const hurgeltFeeDiv = document.querySelector('.hurgeltS + .dun'); // Next to .hurgeltS
        const suuriluulaltFeeDiv = document.querySelector('.suuriluulaltS + .dun'); // Next to .suuriluulaltS
        const totalDiv = document.querySelector('.dunTotal'); // Total amount
        const quantitySelect = document.getElementById('quantity');


        const heaterSelections = document.querySelectorAll('.selections');
        let selectedPrice = 0; // Variable to store the selected product price

        // Event listener for heater selections
        heaterSelections.forEach(selection => {
            selection.addEventListener('click', function() {
                // Get the price from the data attribute
                selectedPrice = parseInt(this.getAttribute('data-price')); 
                updateTotal(); // Update total when a new selection is made
            });
        });



        // Delivery fees based on selection
        hotDotorButton.addEventListener('click', () => {
            hurgeltFeeDiv.innerText = '10000₮'; // Set delivery fee to 10,000₮
            updateTotal(); // Update the total amount
        });

        salbaraasButton.addEventListener('click', () => {
            hurgeltFeeDiv.innerText = '0₮'; // No delivery fee
            updateTotal(); // Update the total amount
        });

        oronNutagButton.addEventListener('click', () => {
            hurgeltFeeDiv.innerText = '0₮'; // No delivery fee
            updateTotal(); // Update the total amount
        });

        // Elements for installation options
        const instYesButton = document.getElementById('InstYes');
        const instNoButton = document.getElementById('InstNo');

        // Installation fee calculation based on quantity
        instYesButton.addEventListener('click', () => {
            const quantity = parseInt(quantitySelect.value); // Get selected quantity
            const installFee = quantity * 5000; // Calculate installation fee: quantity * 5000₮
            suuriluulaltFeeDiv.innerText = `${installFee}₮`; // Update installation fee
            updateTotal(); // Update the total amount
        });

        instNoButton.addEventListener('click', () => {
            suuriluulaltFeeDiv.innerText = '0₮'; // No installation fee
            updateTotal(); // Update the total amount
        });

        const nameInput = document.querySelector('input[placeholder="Нэр"]');
        const phoneInput = document.querySelector('input[placeholder="Утасны дугаар"]');

        // 2. Select placeholders for "Гүйлгээний утга" and "Гүйлгээний дүн"
        const paymentDescription = document.querySelector('.guilgeeUtga p:nth-child(1)'); // First paragraph for "Гүйлгээний утга"
        const paymentAmount = document.querySelector('.guilgeeUtga p:nth-child(2)'); // Second paragraph for "Гүйлгээний дүн"


        // Update the total amount function
        function updateTotal() {
            const quantity = parseInt(quantitySelect.value); // Get selected quantity
            const baraaDun = selectedPrice * quantity; // Calculate base amount from selected product
            const deliveryFee = parseInt(hurgeltFeeDiv.innerText.replace('₮', '')) || 0;
            const installFee = parseInt(suuriluulaltFeeDiv.innerText.replace('₮', '')) || 0;

            const totalAmount = baraaDun + deliveryFee + installFee;
            totalDiv.innerText = `${totalAmount}₮`; // Update total amount

            // Update the amount in the .zahDetails div
            const zahDetailsDiv = document.querySelector('.zahDetails .dun');
            zahDetailsDiv.innerText = `${baraaDun}₮`; // Update with product price
             // Update the current date
            const today = new Date();
            const formattedDate = today.toISOString().slice(0, 10).replace(/-/g, '/'); // Format: YYYY/MM/DD

            // Set the "zahialgaNum" with the current date and an order suffix (e.g., "/01")
            const zahialgaNumDiv = document.querySelector('.zahialgaNum');
            zahialgaNumDiv.innerText = `${formattedDate}/01`; // You can change "/01" to reflect your order system
             // NEW: Update transaction amount in .guilgeeUtga div
            const guilgeeUtgaDiv = document.querySelector('.guilgeeUtga p:nth-child(2)'); // Selects the second <p> element
            guilgeeUtgaDiv.innerText = `Гүйлгээний дүн : ${totalAmount}₮`; // Update with total amount

            const name = nameInput.value.trim();
            const phone = phoneInput.value.trim();
            
            // Update "Гүйлгээний утга" with name and phone
            if (name && phone) {
                paymentDescription.innerText = `Гүйлгээний утга : ${phone} ${name}`;
            } else {
                paymentDescription.innerText = "Гүйлгээний утга : 00000000 Хэрэглэгч"; // Default value if inputs are empty
            }
        }




        // Function to change the button color
        function changeButtonColor(event) {
            const parentDiv = event.target.closest('div');
            const buttons = parentDiv.querySelectorAll('button');
            const inputField = parentDiv.querySelector('input[type="text"]');

            buttons.forEach(btn => {
                btn.style.backgroundColor = ''; // Reset to default color
                btn.style.color = '';
            });

            // Change the background color of the clicked button
            event.target.style.backgroundColor = 'var(--fontCdark)'; // Set to your desired color
            event.target.style.color = 'var(--fontC)';
        }

        // Select all buttons in the Installment and Bairshil sections
        const noatButtons = document.querySelectorAll('.opt');
        const instButtons = document.querySelectorAll('.instChoice');
        const bChoiceButtons = document.querySelectorAll('.BChoice');

        noatButtons.forEach(button => {
            button.addEventListener('click', changeButtonColor);
        });
        // Add click event listeners to each button in the Installment section
        instButtons.forEach(button => {
            button.addEventListener('click', changeButtonColor);
        });

        // Add click event listeners to each button in the Bairshil section
        bChoiceButtons.forEach(button => {
            button.addEventListener('click', changeButtonColor);
        });
    });