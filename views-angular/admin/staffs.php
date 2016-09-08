   <ol class="breadcrumb">
    <li class="active">
      <i class="fa fa-user"></i> {{ header }}     </li>
    <li class="active">
      <i class="fa fa-user-plus"></i> <a href="admin#create-staff"> Create </a>

    </li>
  </ol>

  <div>
    <table datatable="ng" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Username</th>
            <th>Role</th>
        </tr>
        </thead>
        <tbody>
        <tr ng-repeat="staffData in allStaffs">
            <td>{{ staffData.firstName }}</td>
            <td>{{ staffData.lastName }}</td>
            <td>{{ staffData.email }}</td>
            <td>{{ staffData.username }}</td>
            <td>{{ staffData.isAdmin == 1 ? 'Admin' : 'Guard' }}</td>
        </tr>
        </tbody>
    </table>
</div>