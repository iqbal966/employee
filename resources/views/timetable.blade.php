@extends ('layouts.app')

@section('content')

<table class="table table-striped table-dark">
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
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">TUESDAY</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">WEDNESDAY</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>

          <tr>
                <th scope="row">THURSDAY</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
          </tr>
          <tr>
                <th scope="row">FRIDAY</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
          </tr>
          <tr>
                <th scope="row">SATURDAY</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
          </tr>
          <tr>
                <th scope="row">SUNDAY</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
          </tr>
        </tbody>
      </table>
            
      @endsection

