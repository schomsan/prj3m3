<?php include 'partials/heading.php' ?>
<div class=" container vh-full p-5">
            <h1 class=" p-3">Edit a movie.</h1>
            <form action="" method="post">
                <div class="form-group text-center">
                        <input class="form-control m-2" type="number" name="movie_id" id="movie_id" placeholder="Movie ID">
                        <input type="text" name="title" class="form-control m-2" placeholder="Movie Title">
                        <div class="form-group m-2"><label for="release_date">Release Date: </label>
                        <input type="date" name="release_date" id="release_date" class="form-control"></div>
                        <textarea name="synopsis" id="movie_synopsis" placeholder="Synopsis" class="form-control m-2"></textarea>
                        <div class="form-group m-2">
                            <input type="file" class="form-control-file m-2" id="poster_image" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted m-2">Upload your poster image for the movie here. Make sure its width is 185px.</small>
                        </div>
                        <button type="submit" class="btn btn-primary m-2">Submit</button>
                </div>
                

            </form>

        </div>
<?php include 'partials/footer.php' ?>