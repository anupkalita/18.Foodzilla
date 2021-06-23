
// IIFI
(function(){
    getFoodDetails();
})()


// Function to load all food items
function getFoodDetails(){
    const xhr = new XMLHttpRequest();

    xhr.open('GET', 'admin_updatefood_process.php', true);

    xhr.onload = function(){
        if(this.status === 200){
            
            const data = JSON.parse(this.responseText);

            let output = "";
            let tableHead = `
                <tr id="table-head">
                <th>Food</th>
                <th>Food ID</th>
                <th>Food Name</th>
                <th>Category_ID</th>
                <th>Category Name</th>
                <th>Price</th>
                <th>Delete</th>
                </tr>
            `
            data.forEach(function(item){
                output += `
                    <tr>
                        <td><img src="${item.img_dest}" alt="food_img"></td>
                        <td>${item.food_id}</td>
                        <td>${item.food_name}</td>
                        <td>${item.category_id}</td>
                        <td>${item.category_name}</td>
                        <td>${item.price}</td>
                        <td><button id="delete-btn">Delete</button></td>
                    </tr>
                    `
            })

            document.querySelector('#table').innerHTML = tableHead + output;
        }
    }

    xhr.send();
}


// function to delete food item
document.body.addEventListener('click', function(e){

    if(e.target.id === "delete-btn"){
        deleteFood(e);
    }
})
function deleteFood(e){


    let food_id = e.target.parentElement.parentElement.firstElementChild.nextElementSibling.textContent;

    const xhr = new XMLHttpRequest();

    xhr.open('POST', 'admin_updatefood_process.php', true);

    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onload = function(){
        if(this.status === 200){
            getFoodDetails();
        }
    }

    const food = `food_id=${food_id}`;

    xhr.send(food);
}