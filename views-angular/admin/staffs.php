   <ol class="breadcrumb">
    <li class="active">
      <i class="fa fa-user"></i> {{ header }}     </li>
    <li class="active">
      <i class="fa fa-user-plus"></i> <a href="admin#create-staff"> Create </a>

    </li>
  </ol>

  <div>
    <table datatable="ng" class="table table-hover">
        <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Username</th>
        </tr>
        </thead>
        <tbody>
        <tr ng-repeat="staffData in allStaffs">
            <td>{{ staffData.firstName }}</td>
            <td>{{ staffData.lastName }}</td>
            <td>{{ staffData.email }}</td>
            <td>{{ staffData.username }}</td>
        </tr>
        </tbody>
    </table>
</div>