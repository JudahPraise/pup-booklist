<h5 class="font-italic text-success">*Click the cards to view books</h5>
<div class="row w-100 d-flex">
    
    <div class="col-xl-3 col-md-6 mb-4 align-self-start">
        <a href="{{ route('recommendation.bsit') }}">
            <div class="card shadow h-100 py-2" style="border-left: 4px solid #1265B8">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h5>BSIT</h5></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $countBsitBooks }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tv fa-2x text-primary"></i>
                            
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-3 col-md-6 mb-4 align-self-start">
        <a href="{{ route('recommendation.bsent') }}">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><h5>BSENT</h5></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $countBsentBooks }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-briefcase fa-2x text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-3 col-md-6 mb-4 align-self-start">
        <a href="{{ route('recommendation.bbtle') }}">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><h5>BBTLE</h5></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $countBbtleBooks }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-chalkboard-teacher fa-2x text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>