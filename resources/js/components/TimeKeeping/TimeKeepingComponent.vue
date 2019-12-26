<template>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <a class="btn btn-lg btn-primary fas fa-backward" :href="indexRoute" role="button"></a>
                        </ol>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v3</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="content">
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
            <!-- /.container-fluid-->

            <div class="card">
                <div class="card-body table-responsive">
                    <table class="table table-striped table-bordered" style="overflow: auto;">
                        <thead>
                        <tr>
                            <th>Ngày</th>
                            <th>Tên Ca 1</th>
                            <th>Vào 1</th>
                            <th>Ra 1</th>
                            <th>Tên Ca 2</th>
                            <th>Vào 2</th>
                            <th>Ra 2</th>
                            <th>Tên Ca 3</th>
                            <th>Vào 3</th>
                            <th>Ra 3</th>
                            <th>Man Hours</th>
                            <th>Function</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="detail in employeeDetails"
                            v-bind:style="[(detail.time_shift1===null
                            || (!detail.checkin_1 && detail.time_shift1!==null)
                            || (!detail.checkin_2 && detail.time_shift2!==null)
                            || (!detail.checkin_3 && detail.time_shift3!==null)
                            || (detail.checkin_1 && !detail.checkout_1)
                            || (detail.checkin_2 && !detail.checkout_2)
                            || (detail.checkin_3 && !detail.checkout_3))?{'background-color':'#fbeaa88c'}:'']">
                            <td>
                                {{detail.date|date}}
                            </td>
                            <td>
                                {{(detail.TimeShiftId_1!==0&&detail.time_shift1!==null)?detail.time_shift1.Name:'not checkin'}}
                            </td>
                            <td>
                                {{(detail.checkin_1)?(detail.checkin_1):'not checkin'}}
                            </td>
                            <td>
                                {{(detail.checkout_1)?(detail.checkout_1):'not checkin'}}
                            </td>
                            <td>
                                {{(detail.TimeShiftId_2!==0&&detail.time_shift2!==null)?detail.time_shift2.Name:'not checkin'}}
                            </td>
                            <td>
                                {{(detail.checkin_2)?(detail.checkin_2):'not checkin'}}
                            </td>
                            <td>
                                {{(detail.checkout_2)?(detail.checkout_2):'not checkin'}}
                            </td>
                            <td>
                                {{(detail.TimeShiftId_3!==0&&detail.time_shift3!==null)?detail.time_shift1.Name:'not checkin'}}
                            </td>
                            <td>
                                {{(detail.checkin_3)?(detail.checkin_3):'not checkin'}}
                            </td>
                            <td>
                                {{(detail.checkout_3)?(detail.checkout_3):'not checkin'}}
                            </td>
                            <td>
                                {{ (calManHour(detail.checkin_1, detail.checkout_1) +calManHour(detail.checkin_2, detail.checkout_2) +calManHour(detail.checkin_3, detail.checkout_3)).toFixed(1)}}
                            </td>
                            <td>
                                <a name="" id="" class="btn btn-info"
                                   :href="indexRoute+'/'+detail.EmployeeId+'/edit'" role="button">Edit</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.col -->
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['employeeInfo', 'employeeDetail', 'indexRoute'],
        mounted() {
            console.log('Component mounted.')
        },
        filters: {
            date: function (date) {
                return moment(date).format('DD-MM-YYYY');
            },
            time: function (time) {
                return moment(time).format('h:mm');
            }
        },
        methods:{
          calManHour: function (checkin,checkOut){
              if(checkin && checkOut){
                  let start= moment.duration(checkin);
                  let end = moment.duration(checkOut);
                  return (moment.duration( end-start).asMinutes()/60);
              }
              return 0;
          }
        },
        data() {
            return {
                EmployeeInfo: this.employeeInfo,
                employeeDetails: this.employeeDetail,
                pageSizeOptions: [5, 10, 15, 20],
            }
        }
    }
</script>
