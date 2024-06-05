@extends('layout')

@php 
    $accessories = [
        (object) [
            'productId' => "1234",
            'productImg' => "http://placekitten.com/300/300",
            'productName' => "Kitten 1",
            'productPrice' => "$111",
            'productMembersPrice' => "$99",
            'accessory' => true,
            'sku' => "0987",
        ],
        (object) [
            'productId' => "5678",
            'productImg' => "http://placekitten.com/300/300",
            'productName' => "Kitten 2",
            'productPrice' => "$222",
            'productMembersPrice' => "$199",
            'accessory' => true,
            'sku' => "7654",
        ],
        (object) [
            'productId' => "2584",
            'productImg' => "http://placekitten.com/300/300",
            'productName' => "Kitten 3",
            'productPrice' => "$333",
            'productMembersPrice' => "$299",
            'accessory' => true,
            'sku' => "53589",
        ],
        (object) [
            'productId' => "183246",
            'productImg' => "http://placekitten.com/300/300",
            'productName' => "Kitten 4",
            'productPrice' => "$4444",
            'productMembersPrice' => "$399",
            'accessory' => true,
            'sku' => "134644",
        ],
    ];
@endphp
@section('content')
    <h1>About!</h1>

    <accessories-slider accessories='{!! json_encode($accessories) !!}'></accessories-slider>


    @php
     $projects = [
		(object) [   
			'title' => 'Erosion Repair',
			'content' => 'Over time natural elements can wear away at your valuable land causing severe property damage, loss of valuable soils and lost productivity of your land. Working with the property owner, ESG can provide effective property rehabilitation by removing available top soil, importing, placing and compacting fill material into the eroded areas and redressing with top soil. We can also address the source problem and inlay large rock baffles to slow water flows to minimise future erosion damage or we can address problem paddocks on properties where 4wd and tractor access is impossible due to the steep grades of the land.',
			'image' => asset('images/photos/freeimg_478.jpg'),
			'link' => '#',
		],
		(object) [   
			'title' => 'Quarry Works',
			'content' => 'Redundant Quarries pose a long term management risk for the quarry owners. The Earth Solutions Group has significant experience in rehabilitating redundant quarries and ensures their rehabilitation is undertaken and carried out to a design and management plan in a professional and efficient manner. Our management team will liaise with all stakeholders including DPI, Geotechnical and Environmental Consultants to ensure all agreed upon outcomes are achieved. The intended future land use will ultimately determine the manner in which a quarry is filled. However, whether it is for parklands, domestic housing, commercial buildings or “open spaces” all future uses can be accommodated. The full suite of Earth Solutions Group resources, experience and capabilities will be on hand and on the ground to deliver a first class result.',
			'image' => asset('images/photos/freeimg_7197.jpg') ,
			'link' => '#',
		],
		(object) [   
			'title' => 'Development Projects',
			'content' => 'Earth Solutions Group has formed core alliances with major fill generators and Melbourne\'s premier fill transporter.  With over 400 trucks on the road moving up to 40,000m3 of fill per day, the EPH Group has the capacity to meet your project requirements. Coupled with our highly qualified and experienced plant and equipment operators it\'s no surprise that Earth Solutions Group are more than able to cater to the diverse needs of every project from sourcing appropriate material, to transport and final placement and compaction of material to specification. Earth Solutions Group’s strategic focus ensures that your development project will be completed to exceed you expectations, on time and on budget.',
			'image' => asset('images/photos/freeimg_7700.jpg') ,
			'link' => '#',
		],
		(object) [   
			'title' => 'Environmental Management',
			'content' => 'Earth Solutions Group is the industry leader in environmental management and compliance for fill sites. We understand the importance of the environment and have invested extensively to develop environmental policy and procedures to ensure that our fill sites operate in line with EPA Guidelines ahead of all the competition. Earth Solutions Group\'s policies and procedures are reviewed annually and updated to ensure we are constantly setting an industry leading standard in environmental compliance. In addition to our stringent clean fill requirements, our fill sites are routinely reviewed and monitored by third party environmental consultants to ensure only appropriate materials arrive and remain on site. All these measures ensure that we are protecting land owner assets as well as the environmental legacy inherited by future generations.',
			'image' => asset('images/photos/freeimg_9276.jpg'),
			'link' => '#',
		],
	];	
@endphp

 <section class="projects-section">
	<div class="grid-container"> 
		<div class="grid-x grid-padding-x"> 
			<div class="small-12"> 
				<h3 class="colour-white p-y-5 f-weight-600 f-size-2-quarter l-height-1-quarter">ESG have been involved in filling projects for over 20 years and from humble beginnings filling eroded farm paddocks and landscaping Golf Courses we are now involved in major backfilling projects for quarries, large scale residential developments and major capping projects for redundant landfills.</h3>
			</div>
			<div class="small-12"> 

				<div class="slide-window">
                    <div class="slide-track">

                    @foreach($projects as $key=>$project)
                        @if($key <=3)
                            <div class="slide {{ $key === 0 ? 'active' : null}}">
                                <div class="grid-x grid-padding-x">
                                    <div class="medium-6 cell"> 
                                        <div class="grid-y align-justify h-100"> 
                                            <div class="p-r-4"> 
                                                <h4 class="colour-primary f-weight-600 f-size-2-half">{{ $project->title }}</h4>
                                                <p class="colour-white">Slide-{{$key}} 
                                                    {!! \Illuminate\Support\Str::words( $project->content, 50, '...')  !!}</p>
                                                <a href="{{ $project->link }}" class="m-t-2 colour-white grid-x align-middle">
                                                    <span class="f-size-1-quarter f-weight-600 p-r-1">Learn More</span>
                                                    <i class="fas fa-arrow-circle-right"></i>
                                                </a>
                                            </div>
                                            <div>
                                                <button class="prev-btn f-size-3 colour-white">
                                                    <i class="fa fa-arrow-circle-left"></i>
                                                </button>
                                                <button class="next-btn f-size-3 colour-white">
                                                    <i class="fa fa-arrow-circle-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="medium-6 cell"> 
                                        <div class="img-cover" style="background-image: url('{{ $project->image }}');" > 
                                            <div class="height-maker -three-quarters"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    </div>
                </div><!-- End slide window -->

                <div class="grid-x grid-padding-x slider-nav">
                @foreach($projects as $key=>$project)
                    @if($key <=3)
                    <div class="medium-3 cell p-t-3 p-b-6 projects-nav {{ $key === 0 ? 'active' : null}}">
                        <hr>
                        <a class="slide-btn" data-target-id="{{$key}}">
                            <p class="m-0">Feature Sub Heading</p>
                            <h4>{{ $project->title }}</h4>
                        </a>
                    </div>
                    @endif
                @endforeach
                </div>
                
			</div>
		</div>
	</div>
</section>
 
@endsection