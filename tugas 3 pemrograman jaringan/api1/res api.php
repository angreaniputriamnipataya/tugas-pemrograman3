<html>
    <head>
        <title>cari film</title>
        <scrip src=" http://ajax.googleapis.com/ajax/li/bs/jquery/3.4.1/jquery.min.js"></script>
        <script>
            <?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?apikey=202bed7d&s=
            https://www.youtube.com/watch?v=5PavLBPcu5w - 
            Trailer film Matrix Resurrection '.$judul.'+judul ';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }
        ?>
            $(document).read(function()){
                $('#cari').on('click', function()){
                    var judul =$('#judul').val();
                    $.ajax(){

                        url:"film horor.jpg="apikey=dcfe6f7d&s="+judul,type","type:get",datatype:"json",
                        success : function(data){
                            if(data.response=="true"){
                                var hasil.seacrh;
                                var output ="";
                                $.each(hasil,function(key,values)){
                                    output +='<div class="col-mod-4">';
                                    output +='<div class="well text-center">';
                                    output +="<img src="+values.poster+">";
                                    output +="<h5>"+value title+"</h5>";
                                    output +="<a onclick=\"movieselected('"+value.imbdID+"')\"class ='btn btn-primary'
                                    href='#'>lihat detail</a>";
                                    output +="<div>";
                                    output +="<div>";
                                });
                                $('#hasil').html(output);
                           
     
                                }
                                

                            }
                        });
                    });
                });


                <body>
                    <div class="container">
                        <div class="row">
                            <h1>cari film</h1>
                            <form>
                                <div class="from-group">
                                    <input type="text" class="from-control"id="judul" placeholder="masukkan judul film">
                                    </div>
                                    <button type="button" class="btn btn-primary"id="cari">cari film</button>
                                    </from>
                                    </div>
                                    <div class="row">
                                    <div id="hasil" class="col-md-12"></div>
                                    </div>
                                    </div>
                                    </body>
                                    </html>

            