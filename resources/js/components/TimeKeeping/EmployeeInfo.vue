<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Main content -->
                <div class="invoice p-3 mb-3">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>
                                <i class="fas fa-globe"></i>Detail Time Keeping<a id="Date"></a>
                            </h4>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                            <strong>MSNV</strong>: {{ employeeInfo.EmployeeId }}<br>
                            <strong>Họ Và Tên</strong>: {{ employeeInfo.FullName }}<br>
                            <strong>Giới tính</strong>: {{ employeeInfo.gender }}<br>
                            <strong>Chi Nhánh</strong>: {{ employeeInfo.branch.Name }}<br>
                        </div>
                        <div class="col-sm-4 invoice-col">
                            <strong>Bộ phận</strong>: {{ employeeInfo.department.Name }}<br>
                            <strong>Chuc vu</strong>: {{ (employeeInfo.isLeader===1)?'to truong':'Nhan vien'
                            }}<br>
                            <strong>Thu Viec</strong>: {{ (employeeInfo.isProbation===1)?'Dang thu viec':'Chinh Thuc' }}<br>
                            <strong>Bộ Phận</strong>: {{ employeeInfo.branch.Name }}<br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['employee_info'],
        data() {
            return {
                employeeInfo: this.employee_info,
                pageSizeOptions: [5, 10, 15, 20],
            }
        }
    }
</script>


