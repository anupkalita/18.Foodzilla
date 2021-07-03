const btns = document.querySelectorAll('.btn');
const sessionVariable = document.querySelector('#session-variable').textContent;

// Populate All food items when the page load
// IIFE
(function(){
    loadFoodItems(category="all");
  })();

btns.forEach(function(btn){
    let category;
    btn.addEventListener('click', function(){
        if(btn.classList.contains('appetizer')){
            category = 'appetizer';
            loadFoodItems(category);
        }
        else if(btn.classList.contains('continental')){
            category = 'continental';
            loadFoodItems(category);
        }
        else if(btn.classList.contains('thali')){
            category = 'thali';
            loadFoodItems(category);
        }
        else if(btn.classList.contains('biryani')){
            category = 'biryani';
            loadFoodItems(category);
        }
        else if(btn.classList.contains('dessert')){
            category = 'dessert';
            loadFoodItems(category);
        }
        else{
            category = 'all'
            loadFoodItems(category);
        }
    })
})

// function to fetch food items from database async
function loadFoodItems(category){
    const xhr = new XMLHttpRequest();
    
    xhr.open('GET', 'home_process.php', true);

    xhr.onload = function(){
        if(this.status === 200){
            const data = JSON.parse(this.responseText);
            // console.log(data);

            let output = "";
            // category is all
            if(category === 'all'){
                data.forEach(function(item){
                    output += `
                    <div class="item">
                        <img src="${item.img_dest}" alt="${item.food_name}">
                        <div class="item-desc">
                            <h3>${(item.food_name).toUpperCase()}</h3>
                            <p><i class="fas fa-rupee-sign"></i> ${item.price}</p>
                        </div>
                        <div>
                            <button class="item-btn"><i class="fas fa-cart-arrow-down"></i> Add to Cart</button>
                            <span id="food-id">${item.food_id}</span>
                        </div>
                    </div>
                    `
                })
                
            }else{
                // category is others
                data.forEach(function(item){
                    if(item.category_name === category){
                        output += `
                            <div class="item">
                            <img src="${item.img_dest}" alt="${item.food_name}">
                            <div class="item-desc">
                                <h3>${(item.food_name).toUpperCase()}</h3>
                                <p><i class="fas fa-rupee-sign"></i> ${item.price}</p>
                            </div>
                            <div>
                                <button class="item-btn"><i class="fas fa-cart-arrow-down"></i> Add to Cart</button>
                                <span id="food-id">${item.food_id}</span>
                            </div>
                            </div>
                     `
                    }
                })
            }
            document.querySelector('#display-category').innerHTML = output;
        }
        else{
            console.log("something went wrong");
        }
    }

    xhr.send();
}


// Function to add food to cart
document.body.addEventListener('click', function(e){
    if(e.target.classList.contains('item-btn')){
        let food_id = e.target.nextElementSibling.textContent;
        let customer_name = sessionVariable;
        let quantity = 1;
        console.log(food_id, customer_name, quantity);

        const xhr = new XMLHttpRequest();

        xhr.open('POST', 'add_to_cart_process.php', true);

        xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded')

        xhr.onload = function(){
            if(this.status === 200){
                alert(this.responseText);
            }
        }

        const cartData = `food_id=${food_id}&customer_name=${customer_name}&quantity=${quantity}`

        xhr.send(cartData);
    }
})
