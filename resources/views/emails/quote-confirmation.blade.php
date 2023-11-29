<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f7f7f7;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .header {
      text-align: center;
      margin-bottom: 30px;
    }
    .logo {
      max-width: 200px;
      height: auto;
    }
    .content {
      color: #333;
      line-height: 1.6;
      margin-bottom: 30px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 30px;
    }
    table, th, td {
      border: 1px solid #e6e6e6;
    }
    th, td {
      padding: 12px;
      text-align: left;
      text-transform: capitalize;
    }
    th {
      background-color: #F9810A;
      color: #fff;
      font-weight: 700;
    }
    .thank-you {
      text-align: center;
      margin-top: 20px;
      color: #888;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <img class="logo" src="https://luytech.greenwebbtech.com/public/web/assets/images/logo/logo-dark.png" alt="Company Logo">
      <h1>Hello {{ $quote->user->fname.' '.$quote->user->lname  }},</h1>
      <p>We have received your quote. Thank you for your submission!</p>

      <p>Details of your quote:</p>
    </div>

    <div class="content">
      <table>
        <tr>
          <th>Quote ID</th>
          <td>{{ $quote->id }}</td>
        </tr>
        <tr>
          <th>User</th>
          <td>{{ $quote->user->fname.' '.$quote->user->lname }}</td>
        </tr>
        <tr>
          <th>User Email</th>
          <td>{{ $quote->user->email }}</td>
        </tr>
        @if ($quote->message != null)
        <tr>
          <th>Quote Details</th>
          <td>{{ $quote->message }}</td>
        </tr>
        @endif
        <tr>
          <th>Consignment Type</th>
          <td>{{ $quote->consignment_type }}</td>
        </tr>
      </table>

      @if ($quote->product_type == 'vehicle')
        <table>
          <tr>
            <th>Car Make</th>
            <th>Car Model</th>
            <th>Color</th>
            <th>Engine CC</th>
            <th>Fuel</th>
            <th>Transmission</th>
            <th>Car Year</th>
          </tr>
          @forelse ($quote->cars as $car)
          <tr>
            <td>{{ $car->car_make }}</td>
            <td>{{ $car->car_model }}</td>
            <td>{{ $car->car_color }}</td>
            <td>{{ $car->engine_cc }}</td>
            <td>{{ $car->fuel }}</td>
            <td>{{ $car->transmission }}</td>
            <td>{{ $car->car_year }}</td>
          </tr>
          @empty
          @endforelse
        </table>
      @else
      <table>
        <tr>

          <th>Item Name</th>
          <th>Size</th>
          <th>Quantity</th>
          <th>Packaging</th>
          <th>Total</th>
        </tr>
        @forelse ($quote->goods as $g)
        <tr>
            <td scope="row"><b>{{$g->name}}</b></td>
            <td>{{$g->size}}</td>
            <td>{{$g->qty}}</td>
            <td>{{$g->packaging}}</td>
            <td>{{$g->cost ?? 0}}</td>
        </tr>
        @empty
        @endforelse
      </table>
      @endif
    </div>

    <div class="thank-you">
      <p>Thank you!</p>
    </div>
  </div>
</body>
</html>

