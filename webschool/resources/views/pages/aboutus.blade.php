@extends('layouts.app')
@section('content' )
<div class="container">
    
<a href="/" class="btn btn-default"> Go back</a>
	<div class="row">
		<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

				


    <section class="container mt-20">
        <div class="row">
            <div class="col-lg-12 mt-20">
                <h2 class="heading"><span class="text-primary">Notice and Events</span></h2>
                <p class="lead"></p><p><span style="color: #ff0000;"><marquee direction="right"><strong>VIEW ALL OUR NOTICES AND EVENTS HERE:</strong></marquee></span><br>
</p><ul class="lcp_catlist" id="lcp_instance_0"></ul><p></p>
<p></p>
        
    </section>
    
		</div>

				



<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mt-40">
			
    <aside id="secondary" class="widget-area">
        <section id="text-3" class="widget widget_text"><h2 class="widget-title">Our Mission</h2>	
            		<div class="textwidget">
                        <p>The mission of Southwestern School PG to 10, is to provide strong moral foundation, within a safe inclusive setting for students of present world.</p>
                </div>
         </section>
            <section id="text-4" class="widget widget_text">
                <h2 class="widget-title">Our Values</h2>
                			<div class="textwidget">
                                <p>We have a passion that each student comes to value and view his/her diversity as a gift by nature/God. Respecting diversities of each student is equally important.</p>
                            </div>
            </section>
            <section id="text-5" class="widget widget_text">
            <h2 class="widget-title">Our Vision</h2>	
            	<div class="textwidget"><ul>
                    <li>Provide a safe environment, free from bullying.</li>
                    <li>Create an atmosphere where diversity is valued and respected.</li>
                    <li>Provide engaging curriculum that continually challenges each student to reach beyond typical expectations.</li>
                    <li>Achieve all these goals by building on a strong foundation of moral principles.</li>
                     
    </ul>
    </div>
            </section>
          
        </aside><!-- #secondary -->
            </div>
        </div>
    </div>@include('inc.footer')
            @endsection