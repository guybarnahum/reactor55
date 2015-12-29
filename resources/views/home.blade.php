<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bar-Nahum</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicons/favicon.ico') }}" />
        <link rel="icon" type="image/png" href="{{ asset('assets/images/favicons/favicon.png') }}" />
        <!-- For iPhone 4 Retina display: -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/images/favicons/apple-touch-icon-114x114-precomposed.png') }}">
        <!-- For iPad: -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/images/favicons/apple-touch-icon-72x72-precomposed.png') }}">
        <!-- For iPhone: -->
        <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/favicons/apple-touch-icon-60x60-precomposed.png') }}">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/color-defaults.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swatch-beige-black.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swatch-black-beige.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swatch-black-white.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swatch-black-yellow.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swatch-blue-white.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swatch-green-white.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swatch-red-white.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swatch-white-black.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swatch-white-blue.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swatch-white-green.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swatch-white-red.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swatch-yellow-black.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/fonts.min.css') }}" media="screen">
    </head>
    <body>
        <div id="content" role="main">
            <section class="section swatch-black-white">
                <div class="container">
                    <div class="row">
                    <div class="col-md-6  text-default os-animation animated "
                         data-os-animation="fadeInLeft" data-os-animation-delay="0.1s">
                            <p>
                            <div class="box-round box-big box-round flat-shadow">
                                <div class="box-dummy"></div>
                                <figure class="box-inner">
                                    <img class="aligncenter size-full wp-image-3365" alt="blog-normal" 
                                    src="{{ asset('assets/images/people/GuyBarNahum.jpg') }}">
                                </figure>
                                <div class="hex-right"></div>
                                <div class="hex-left"></div>
                            </div>
                            <div>
                                <ul class="list-inline text-center social-icons social-simple">
                                <li>
                                        <p class="">Guy Bar-Nahum</p>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://www.facebook.com/guy.barnahum">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://www.linkedin.com/in/guybarnahum">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            </p>
                        </div>
                        <div class="col-md-6  text-default os-animation animated "
                        data-os-animation="fadeInRight" data-os-animation-delay="0.1s">
                            <p>
                                <br><br><br>
                                <h1 class="headline medium hairline alignenter">
                                    Software is what I do.
                                </h1>
                                <p id="qoute">
                                </p>
                                <br>
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <a class="go-top hex-alt" href="javascript:void(0)">
            <i class="fa fa-angle-up"></i>
        </a>
        <script src="{{ asset('assets/js/packages.min.js') }}""></script>
        <script src="{{ asset('assets/js/theme.min.js') }}""></script>
        
        <!-- Annotator -->

        <script src="http://assets.annotateit.org/annotator/v1.2.10/annotator-full.min.js"></script>
        <link rel="stylesheet" href="http://assets.annotateit.org/annotator/v1.2.10/annotator.min.css">
        
        <script>
        /*
        $('.container').annotator()
                       .annotator('setupPlugins', null, {
                            Auth: { 
                                tokenUrl: 'http://reactor.barnahum.com/jwt/token.php'
                            },
                            Permissions: false,
                            Filter: false,
                            AnnotateItPermissions: {}
                    });
        */
        </script>
        
        <script>
        
        var qoutes = [
        
        "“ Java is to JavaScript what Car is to Carpet.” <br><br>- Chris Heilmann",
        
        "“ It&#39;s hard enough to find an error in your code when you&#39;re looking for it; it&#39;s even harder when you&#39;ve assumed your code is error-free.” <br><br>- Steve McConnell",
            
        "“ If debugging is the process of removing software bugs,<br> then programming must be the process of putting them in.” <br><br>- Edsger Dijkstra",
    
        "“ Rules of Optimization:<br> Rule 1: Don&#39;t do it.<br> Rule 2 (for experts only): Don&#39;t do it yet.” <br><br>- Michael A. Jackson",
        
        "“ The best method for accelerating a computer is the one that boosts it by 9.8 m/s2. <br><br>- Anonymous",
        
        "“ Walking on water and developing software from a specification are easy if both are frozen. ” <br><br>- Edward V Berard",
        
        "“ Debugging is twice as hard as writing the code in the first place. Therefore, if you write the code as cleverly as possible, you are, by definition, not smart enough to debug it. ” <br><br>- Brian Kernighan",
        
        "“ It&#39;s not at all important to get it right the first time.<br> It&#39;s vitally important to get it right the last time. ” <br><br>- Andrew Hunt and David Thomas",
        
        "“ First, solve the problem. Then, write the code. ” <br><br>- John Johnson",
        
        "“ Should array indices start at 0 or 1? My compromise of 0.5 was rejected without, I thought, proper consideration. ” <br><br>- Stan Kelly-Bootle",
        
        "“ Always code as if the guy who ends up maintaining your code will be a violent psychopath who knows where you live. ” <br><br>- Rick Osborne",
        
        "“ Any fool can write code that a computer can understand. Good programmers write code that humans can understand. ” <br><br>- Martin Fowler",
        
        "“ Software sucks because users demand it to. ” <br><br>- Nathan Myhrvold",
        
        "“ Linux is only free if your time has no value. ” <br><br>- Jamie Zawinski",
        
        "“ Beware of bugs in the above code; I have only proved it correct, not tried it. ” <br><br>- Donald Knuth",
        
        "“ There is not now, nor has there ever been, nor will there ever be, any programming language in which it is the least bit difficult to write bad code. ” <br><br>- Flon&#39;s Law",
        
        "“ The first 90% of the code accounts for the first 90% of the development time. The remaining 10% of the code accounts for the other 90% of the development time. ” <br><br>- Tom Cargill",
        
        "“ Good code is its own best documentation. As you&#39;re about to add a comment, ask yourself, \"How can I improve the code so that this comment isn&#39;t needed?\" Improve the code and then document it to make it even clearer. ” <br><br>- Steve McConnell",
        
        "“ Programs must be written for people to read, and only incidentally for machines to execute. ” <br><br>- Abelson / Sussman",
        
        "“ Most software today is very much like an Egyptian pyramid with millions of bricks piled on top of each other, with no structural integrity, but just done by brute force and thousands of slaves. ” <br><br>- Alan Kay",
        
        "“ Programming can be fun, so can cryptography; however they should not be combined. ” <br><br>- Kreitzberg and Shneiderman",
        
        "“ Copy and paste is a design error. ” <br><br>- David Parnas",
        
        "“ Before software can be reusable it first has to be usable. ” <br><br>- Ralph Johnson",
        
        "“ Without requirements or design, programming is the art of adding bugs to an empty text file. ” <br><br>- Louis Srygley",
        
        "“ When someone says, \"I want a programming language in which I need only say what I want done,\" give him a lollipop. ” <br><br>- Alan Perlis",
        
        "“ Computers are good at following instructions, but not at reading your mind. ” <br><br>- Donald Knuth",
        
        "“ Any code of your own that you haven&#39;t looked at for six or more months might as well have been written by someone else. ” <br><br><b>- Eagleson&#39;s law</b>",
        
        "“ Science is what we understand well enough to explain to a computer. Art is everything else we do.” <br><br><b>- Donald Knuth",
        ];
        
        function init_design_qoutes( num )
        {
            var url  = 'http://quotesondesign.com/wp-json/posts';
                url += '?filter[orderby]=rand&filter[posts_per_page]=' + num;
                
            // call back function from url
            $.getJSON( url, function(data) {
                
                if (data instanceof Array){
                    
                    for( var ix = 0; ix < data.length; ix++  ){
                        
                        var item = data[ ix ];
                        
                        if ( item.hasOwnProperty('content') ){
                            q = "“" + item.content + "”";
                            q = q.replace( "<p>", "");
                            q = q.replace( "</p>","");
                            
                            who = item.hasOwnProperty('title')? item.title:"Unknown";
                            q  += "<br><br>- "+ who;
                            
                            console.log(ix +" : " +q);
                            qoutes.push( q );
                        }
                    }
                }
            });
        }
        
        init_design_qoutes( qoutes.length );
        
        function get_random_qoute()
        {
            return qoutes[ Math.floor(Math.random()*qoutes.length) ];
        }
        
        function display_random_qoute( id )
        {
            $(id).fadeOut('slow', 
            
            // oncompletion of fadeOut, change and fadeIn..
            function(){
            
                var html  = "<div style=''>";
                    html  += "<p class='hairline'><i>" + get_random_qoute(); + "</i></p>"
                    html  += "</div>";
            
                $(this).html( html );
                $(this).fadeIn('slow');
            });
        }
        
        display_random_qoute( '#qoute' );
        setInterval("display_random_qoute('#qoute')", 12000);
        
        </script>
        
    </body>
</html>
