<!DOCTYPE html>
<html>
    <head>
        <title>EXPENSE</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/expense.css')}}">
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
            <div class="block-title">
                <h2>EXPENSE SUMMARY DETAILS</h2>
            </div>
            <div class = "cell">
                <div class="content-block">
                    <div class="display-expense">
                        <div class="display-item">
                            <p>₱{{$totalExpense}}</p>
                        </div>
                        <div class="display-item">
                            <p id="label">TOTAL EXPENSE</p>
                        </div>
                    </div>
                    <div class="content-item">
                        <form action = "/postExpense" method = "POST">
                            @csrf
                            <select name="category" class= "selection" required onchange = "this.form.submit()">
                                <Option value="" disabled selected>Choose a Category</Option>
                                <option value="All">Show All</option>                 
                                <option value="FOOD">Food</option>
                                <option value="UTILITIES">Utilities</option>
                                <option value="COMMUNICATION">Communication</option>
                                <option value="GROCERY">Grocery</option>
                                <option value="MEDICAL">Medical</option>
                                <option value="ACCESSORIES">Accessories</option>
                                <option value="TRANSPORTATION">Transportation</option>
                                <option value="OTHERS">Others</option>
                            </select>
                        </form>
                    </div>
                </div>
                
                <div class = "printing">
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
            </div>
        </div>
    </body>
</html>