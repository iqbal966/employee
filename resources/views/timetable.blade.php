@extends ('layouts.app')

@section('content')


<table class="table table-striped table-dark">
    <div class="w3-sidebar w3-bar-block" style="width:25%">
        <a href="#" class="w3-bar-item w3-button">Week 1</a>
      <div class="w3-sidebar w3-bar-block" style="width:25%">
        <a href="#" class="w3-bar-item w3-button">Week 2</a>
        
      </div>
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">MORNING</th>
            <th scope="col">MIDDLE</th>
            <th scope="col">NIGHT</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">MONDAY</th>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">TUESDAY</th>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">WEDNESDAY</th>
            <td></td>
            <td></td>
            <td></td>
          </tr>

          <tr>
                <th scope="row">THURSDAY</th>
                <td></td>
                <td></td>
                <td></td>
          </tr>
          <tr>
                <th scope="row">FRIDAY</th>
                <td></td>
                <td></td>
                <td></td>
          </tr>
          <tr>
                <th scope="row">SATURDAY</th>
                <td></td>
                <td></td>
                <td></td>
          </tr>
          <tr>
                <th scope="row">SUNDAY</th>
                <td></td>
                <td></td>
                <td></td>
          </tr>
        </tbody>
      </table>
            
      @endsection

