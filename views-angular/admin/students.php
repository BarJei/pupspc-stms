   <ol class="breadcrumb">
    <li class="active">
      <i class="fa fa-user"></i> {{ header }} </li>
    <li class="active">
      <i class="fa fa-user-plus"></i> <a href="admin#create-student"> Create </a>

    </li>
  </ol>

  <div>
    <table datatable="ng" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Student #</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Role</th>
        </tr>
        </thead>
        <tbody>
        <tr ng-repeat="studentData in students">
            <td>{{ studentData.studNo }}</td>
            <td>{{ studentData.firstName }}</td>
            <td>{{ studentData.middleName }}</td>
            <td>{{ studentData.lastName }}</td>
            <td>{{ studentData.userType == 1 ? 'LMG' : 'SA' }}</td>
        </tr>
        </tbody>
    </table>
</div>