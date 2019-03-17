@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
       <!--  <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! -->
       <h1> Request Now</h1>

<div class="container">
    <h2> Fast Deliver Moqautam City</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Order what you need</th>
                <td>Time You Need</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                
                <form method="POST" action="/items/store">

                    {{csrf_field()}}

                 <td><textarea type="text" name="body" ></textarea></td>
                 <td>
                    <select name="delivertime">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="volvo">8</option>
                      <option value="volvo">9</option>
                      <option value="volvo">10</option>
                      <option value="volvo">11</option>
                      <option value="volvo">12</option>
                    </select>
                    <select name="created_at">
                      <option value="volvo">AM</option>
                      <option value="volvo">PM</option>
                     </select>

                </td>
                 <td>

                 <button type="submit" class="btn btn-success">Deliver now</button>

                 
                 </td>
               
            </tr>

            </form>
        </tbody>
    </table>
<h1 class="text-center">Abbassi</h1>
    <div class="container">
             <div class="table-responsive">
              <table class="main-table text-center table table-bordered">
        <style >
 th{
  color: white
 }
        </style>
<thead>
            <tr style="font-weight: bold; background-color: #094a89">
              
                <th style="font-weight: bold;font-style: italic; color: white;" class="text-center">Number</th>
                <th style="font-weight: bold;font-style: italic; color: white;" class="text-center">Shape</th>
                <th style="font-weight: bold;font-style: italic;color: white;" class="text-center">Weight</th>
                <th style="font-style: italic;color: white;" class="text-center">Clarity</td>
                <th style="font-style: italic;color: white;" class="text-center">Colour</td>
                <th style="font-style: italic;color: white;" class="text-center">Certificate</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                 <td>1</td>
                 <td>Round</td>
                 <td>2.00</td>
                 <td>Vs1</td>
                 <td>H</td>
                 <td>HRD</td>
               
            </tr>
            <tr>
                <td>2</td>
                <td>Round</td>
                 <td>1.03</td>
                 <td>Vs2</td>
                 <td>H</td>
                 <td>HRD</td>
               
            </tr>
            <tr>
                 <td>3</td>
                 <td>Round</td>
                 <td>1.02</td>
                 <td>Vs1</td>
                 <td>G</td>
                 <td>HRD</td>
               
            </tr>
            <tr>
<td>4</td> <td>Round</td>
                 <td>1.01</td>
                 <td>VVs1</td>
                 <td>G</td>
                 <td>HRD</td>
               
            </tr>
            <tr>
<td>5</td><td>Round</td>
                 <td>1.00</td>
                 <td>Vs1</td>
                 <td>G</td>
                 <td>HRD</td>
               
            </tr>
            <tr>
<td>6</td><td>Round</td>
                 <td>1.00</td>
                 <td>VVs2</td>
                 <td>I</td>
                 <td>HRD</td>
               
            </tr>
            <tr>
<td>7</td><td>Round</td>
                 <td>0.94</td>
                 <td>Vs1</td>
                 <td>I</td>
                 <td>HRD</td>
               
            </tr>
            <tr>
<td>8</td><td>Round</td>
                 <td>0.93</td>
                 <td>Vs1</td>
                 <td>I</td>
                 <td>HRD</td>
               
            </tr>
            <tr>
<td>9</td><td>Round</td>
                 <td>0.90</td>
                 <td>Vs1</td>
                 <td>I</td>
                 <td>HRD</td>
               
            </tr>
            <tr>
<td>10</td><td>Round</td>
                 <td>0.85</td>
                 <td>VVs2</td>
                 <td>H</td>
                 <td>HRD</td>
               
            </tr>
            <tr>
<td>11</td><td>Round</td>
                 <td>0.72</td>
                 <td>Vs1</td>
                 <td>G</td>
                 <td>HRD</td>
               
            </tr>
            <tr>
<td>12</td><td>Round</td>
                 <td>0.70</td>
                 <td>Vs1</td>
                 <td>G</td>
                 <td>HRD</td>
               
            </tr>
            <tr>
<td>13</td><td>Round</td>
                 <td>0.70</td>
                 <td>VVs2</td>
                 <td>G</td>
                 <td>HRD</td>
               
            </tr>
            <tr>
<td>14</td><td>Round</td>
                 <td>0.46</td>
                 <td>Vs1</td>
                 <td>H</td>
                 <td>GIA</td>
               
            </tr>
            <tr>
<td>15</td><td>Round</td>
                 <td>0.44</td>
                 <td>VVs2</td>
                 <td>D</td>
                 <td>GIA</td>
               
            </tr>

            </form>
        </tbody>
    </table>

  </div>
</div>



  <div class="container">
             <div class="table-responsive">
              <table class="main-table text-center table table-bordered">
        <style >
 th{
  color: white
 }
        </style>
<thead>
            <tr style="font-weight: bold; background-color: #094a89">
              
                
                <th style="font-weight: bold;font-style: italic; color: white;" class="text-center">Number</th>
                <th style="font-weight: bold;font-style: italic; color: white;" class="text-center">Shape</th>
                <th style="font-weight: bold;font-style: italic;color: white;" class="text-center">Weight</th>
                <th style="font-style: italic;color: white;" class="text-center">Clarity</td>
                <th style="font-style: italic;color: white;" class="text-center">Colour</td>
                <th style="font-style: italic;color: white;" class="text-center">Certificate</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                 <td>1</td>
                 <td>Pr</td>
                 <td>1.50</td>
                 <td>Vs1</td>
                 <td>I</td>
                 <td>HRD</td>
               
            </tr>
            <tr>
                <td>2</td>
                 <td>Pr</td>
                <td>0.92</td>
                 <td>Vs1</td>
                 <td>I</td>
                 <td>HRD</td>
               
            </tr>

</tbody>
    </table>

  </div>
</div>



  @include('layouts.errors')

</form>
</div>

                
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="site-footer">
        <div class="wrapperFull wrapperFull--dust-dark">
            <div class="wrapper wrapper--thin section">
                <div class="text-group text-center">
                    <ul class="social-list">
                        <li>
                            <a href="https://twitter.com/Agra_Culture" target="_blank">
                                <svg><use xlink:href="#shape-twitter"></use></svg>
                            </a>
                        </li>
                        <li>
                            <a href="http://instagram.com/agra_culture" target="_blank">
                                <svg><use xlink:href="#shape-instagram"></use></svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/agraculture" target="_blank">
                                <svg><use xlink:href="#shape-facebook"></use></svg>
                            </a>
                        </li>
                    </ul>
                    <p class="h5 text-white">HEALTHY FAST-CASUAL FOOD, CRAFTED WITH <span class="shape-heart"><svg><use xlink:href="#shape-heart"></use></svg></span> IN MINNEAPOLIS</p>
                </div>
            </div>
        </div>
       <main role="main" class="flex-shrink-0">

<footer class="footer mt-auto py-3">
  <div class="container">
    <span class="text-muted">Place sticky footer content here.</span>
  </div>
</footer>




@endsection

