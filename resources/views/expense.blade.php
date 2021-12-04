<!DOCTYPE html>
<html>
    <head>
        <title>EXPENSE</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" id="dynamik-viewport"/>
    </head>
    <body>
        <div class="sidebar">
            <div class="logo">
                <h1>DASHBOARD</h1>
            </div>
            <div class="sidebar-content">
                <a href="/" class="sidebar-item">HOME</a>
                <a href="/income" class="sidebar-item">INCOME</a>
                <a href="/expense" class="sidebar-item">EXPENSE</a>
            </div>
        </div>
        <header>
            <h2>MONEYHAYST BUDGET AND EXPENSE TRACKER</h2>
        </header>

        <div class="main-content">
            
            <div>
                <form action = "/postExpense" method = "POST">
                    @csrf
                    <select name="category" id="category-type" required onchange = "this.form.submit()">
                        <Option value="" disabled selected>Choose a Category</Option>                 
                        <option name = "food" value="FOOD">Food</option>
                        <option name = "utilities" value="UTILITIES">Utilities</option>
                        <option name = "comms" value="COMMUNICATION">Communication</option>
                        <option name = "grocery" value="GROCERY">Grocery</option>
                        <option name = "meds" value="MEDICAL">Medical</option>
                        <option name = "accessories" value="ACCESSORIES">Accessories</option>
                        <option name = "transpo" value="TRANSPORTATION">Transportation</option>
                        <option name = "others" value="OTHERS">Others</option>
                    </select>
                </form>
            </div>

            <div>

                <table>

                    <thead>
                        <tr>
                            <td>Category</td>
                            <td>Transaction Date</td>
                            <td>Amount</td>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($transacData as $key => $data)
                            <tr>
                                <td>{{$data->category}}</td>
                                <td>{{$data->transac_date}}</td>
                                <td>{{$data->amount}}</td>
                            </tr>                        
                        @endforeach
                        
                    </tbody>

                </table>

            </div>

            <div>
                <h3>Total Expenses: </h3>
            </div>

        </div>
    </body>
</html>