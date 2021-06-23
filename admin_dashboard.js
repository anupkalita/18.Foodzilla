(function(){
    
    const xhr = new XMLHttpRequest();

    xhr.open('GET', 'admin_dashboard_process.php', true);

    xhr.onload = function(){
        if(this.status === 200){
            
            const data = JSON.parse(this.responseText);

            let output = `
                    <div class="dashboard-item">
                        <h2>Total Orders</h2>
                        <p>${data.total_orders}</p>
                    </div>
                    <div class="dashboard-item">
                        <h2>Total Food Items</h2>
                        <p>${data.total_food}</p>
                    </div>
                    <div class="dashboard-item">
                        <h2>Total Customers</h2>
                        <p>${data.total_customer}</p>
                    </div>
                    <div class="dashboard-item">
                        <h2>Total Revenue</h2>
                        <p><i class="fas fa-rupee-sign"></i> ${data.revenue}</p>
                    </div>
            `;

            document.querySelector('#dashboard').innerHTML = output;

        }
    }

    xhr.send();
})();