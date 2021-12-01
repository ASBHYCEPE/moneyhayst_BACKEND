<?php
    /*use App\Http\Controllers\navigationController;
    if(isset($_POST["categories"])){
        $val = $_POST["categories"];
        expense($val);
    }*/
?>

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
                <form action = "/post" method = "POST">
                    @csrf
                    <select name="categories" id="category-type" required onchange = "this.form.submit()">
                        <Option value="" disabled selected>Choose a Category</Option>
                        <option value="all">Show All</option>
                        <option value="food">Food</option>
                        <option value="utilities">Utilities</option>
                        <option value="comms">Communication</option>
                        <option value="grocery">Grocery</option>
                        <option value="meds">Medical</option>
                        <option value="accessories">Accessories</option>
                        <option value="transpo">Transportation</option>
                        <option value="others">Others</option>
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
                                <td>₱{{$data->amount}}</td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>

            </div>

            <div>

                <h3>Total Expenses from this Category: </h3>
                <h3>Total Expenses: </h3>

            </div>

        </div>
    </body>
</html>