
// Function to get orders from database and populate it
(function(){
    const xhr = new XMLHttpRequest();

    xhr.open('GET', 'admin_orders_process.php', true);

    xhr.onload = function(){
        if(this.status === 200){
            const data = JSON.parse(this.responseText);
            let output = "";
            let tableHead = `
                <tr id="table-head">
                <th>OrderID</th>
                <th>Customer Name</th>
                <th>Food</th>
                <th>Price</th>
                <th>Address</th>
                <th>Date</th>
                <th>Status</th>
                </tr>
            
            `
        data.forEach(function(item){

            output += `
                    <tr>
                        <td>${item.order_id}</td>
                        <td>${item.customer_name}</td>
                        <td>${(item.total_food).slice(0,-2)}</td>
                        <td>${item.total_price}</td>
                        <td>${item.address}</td>
                        <td>${(item.date).slice(0,-7)}</td>
                        <td>
                            <select name="status" id="status">
                                <option value="ordered" ${selectOrdered(item)}>Ordered</option>
                                <option value="delivered" ${selectDelivered(item)}>Delivered</option>
                                <option value="cancelled" ${selectCancelled(item)}>Cancelled</option>
                            </select>
                        </td>
                </tr>
                `
        })
        document.querySelector('#table').innerHTML = tableHead + output;

        }
    }

    xhr.send();
})()


// Function to add 'selected' attribute to option tag 
function selectOrdered(item){
    if(item.status === "ordered"){
        return "selected";
    }
}
function selectDelivered(item){
    if(item.status === "delivered"){
        return "selected";
    }
}
function selectCancelled(item){
    if(item.status === "cancelled"){
        return "selected";
    }
}


// Function to change order status in database
document.body.addEventListener('change', function(e){
    if(e.target.id === "status"){
        
        let order_id = e.target.parentElement.parentElement.firstElementChild.textContent;
        let status = e.target.value;

        const xhr = new XMLHttpRequest();

        xhr.open('POST', 'admin_orders_status_process.php', true);

        xhr.onload = function(){
            if(this.status === 200){
                console.log(this.responseText);
            }
        }

        xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');

        const changeStatus = `status=${status}&order_id=${order_id}`;

        xhr.send(changeStatus);
    }
})