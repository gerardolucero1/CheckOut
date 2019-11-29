@section('title') 
Profile - {{ $user->name }}
@endsection
@extends('layouts.main')
@section('style')
<!-- DataTables CSS -->
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    

<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar mt-5">
    <!-- Start XP Row -->
    <div class="row mt-3">
        <!-- End XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="col-lg-6 offset-md-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="xp-social-profile">
                                    <div class="xp-social-profile-img">
                                        <div class="row">
                                            <div class="col-12 px-1">
                                                <img src="https://0.soompi.io/wp-content/uploads/2018/02/08073905/april-the-blue2.jpg?s=900x600&e=t" class="rounded img-fluid" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xp-social-profile-top">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="xp-social-profile-star py-3">
                                                    <i class="icon-star font-20"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="xp-social-profile-avatar text-center">
                                                    <img src="https://66.media.tumblr.com/63754f379788d749bfb776ee9c81a38b/tumblr_phgar8wEJr1xxmdqgo1_500.png" alt="user-profile" class="rounded-circle img-fluid"><span class="xp-social-profile-live"></span>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="xp-social-profile-menu text-right py-3">
                                                    <i class="icon-options font-20"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xp-social-profile-middle text-center">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="xp-social-profile-title">
                                                    <h5 class="my-1 text-black">DaffyDuckWizard</h5>
                                                </div>
                                                <div class="xp-social-profile-subtitle">
                                                    <p class="mb-3 text-muted">{{ $user->name }}</p>
                                                </div>
                                                <div class="xp-social-profile-desc">
                                                    <p class="text-muted mb-1">Lifestyle coach and photographer <br>delivering best images only...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xp-social-profile-bottom text-center">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="xp-social-profile-media pt-3">
                                                    <h5 class="text-black my-1">45</h5>
                                                    <p class="mb-0 text-muted">Posts</p>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="xp-social-profile-followers pt-3">
                                                    <h5 class="text-black my-1">278k</h5>
                                                    <p class="mb-0 text-muted">Fans</p>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="xp-social-profile-following pt-3">
                                                    <h5 class="text-black my-1">552</h5>
                                                    <p class="mb-0 text-muted">Likes</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
    </div>
    <!-- End XP Row -->
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')
<!-- Required Datatable JS -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/init/table-datatable-init.js') }}"></script>
@endsection 