const customer_name = document.querySelector("#session-variable").textContent;

(function(){
    const xhr = new XMLHttpRequest();

    xhr.open('GET', 'orders_process.php', true);

    xhr.onload = function(){
        if(this.status === 200){
            // console.log(JSON.parse(this.responseText));
            const data = JSON.parse(this.responseText);
            let output = "";
            data.forEach(function(item){
                
                output += `
                    <div class="order-item">
                        <div class="label">
                            <p>Date:</p>
                            <p>Total Food:</p>
                            <p>Total Price:</p>
                            <p>Status:</p>
                        </div>
                        <div class="order-details">
                            <p>${(item.date).slice(0,-7)}</p>
                            <p>${(item.total_food).slice(0,-2)}</p>
                            <p>${item.total_price}</p>
                            <p>${item.status}</p>
                        </div>
                    </div>
                `
            });

            document.querySelector('#orders').innerHTML = output;
        }
    }

    xhr.send();
})()