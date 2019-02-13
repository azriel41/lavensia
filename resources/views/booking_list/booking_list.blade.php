@extends('layouts_frontend_2._main')  

@section('extra_style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>

<style type="text/css">
    .form-inline{
        display :block !important;
    }
    .form-inline label{
        display :block !important;
    }
    
</style>
@endsection

@section('content')
<section class="dorne-features-events-area bg-img bg-overlay-9 section-padding-100-50" style="background-image: url({{ asset('storage/app/company/bg-10.jpg') }})">
            <br>
            <br>
                <br>
                <br>
                <div class="col-12">
                    <div class="section-heading text-center">
                        <span></span>
                        <h4>Booking List Detail</h4>
                        <p>List Booking</p>
                    </div>
                </div>
            <div style="background-color: whitesmoke;padding: 50px 20px 50px 20px">
                <div class="table-responsive">
                    <table width="100%" class="table table-striped datatable_y" style="font-size: 14px;" align="center">
                        <thead>
                           <tr >
                               <th class="center-al">Booking Code</th>
                               <th class="center-al">Party Name</th>
                               <th class="center-al">Book Date</th>
                               <th class="center-al">Dep Date</th>
                               <th class="center-al">Group Name</th>
                               <th class="center-al">Status</th>
                               <th class="center-al">Stat Pay</th>
                               <th class="center-al">Book by</th>
                               <th class="center-al">Handle By</th>
                               <th class="center-al">Payment</th>
                           </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
    </section>
@endsection

@section('extra_scripts')

    <script type="text/javascript">
        $('.datatable_y').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
              url:'{{ route('datatable_booking_list') }}',
            },
            columnDefs: [
                    {
                        targets: 0 ,
                        className: 'center'
                    },
                    {
                        targets: 5 ,
                        className: 'center'
                    },
                    {
                        targets: 6 ,
                        className: 'center'
                    },
                    {
                        targets: 7 ,
                        className: 'center'
                    },
                ],
            columns: [
                {data: 'bookingdetail', name: 'bookingdetail'},
                {data: 'db_name', name: 'db_name'},
                {data: 'date', name: 'date'},
                {data: 'date_start', name: 'date_start'},
                {data: 'grup', name: 'grup'},
                {data: 'status', name: 'status'},
                {data: 'pay', name: 'pay'},
                {data: 'bookby', name: 'bookby'},
                {data: 'handle', name: 'handle'},
                {data: 'termin', name: 'termin'},
            ]
        });

        function pay(id) {
            var rand1 = '{{ md5('Demi yang Maha Pengasih Lagi Maha Penyayang Bagi Sang Pencipta Alam Semesta').rand(1,1000000) }}';
            var rand2 = '{{ md5('Dengan Nama Allah Yang Maha Pengasih Lagi Maha Penyayang').rand(1,1000000) }}';
            var rand3 = '{{ md5('Segala Puji Bagi Allah Tuhan Seru Sekalian Alam').rand(1,1000000)}}';
            window.location=('{{ url('/payment_page/payment_termin') }}'+'?rand='+rand1+'&rand2='+rand2+'&rand3='+rand3+'&id='+id);
        }
        
       // function pay(argument) {
       //     alert();
       // }

    </script>

    
@endsection 


