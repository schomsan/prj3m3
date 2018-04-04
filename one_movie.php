<?php include 'partials/heading.php' ?>

        <div class=" container vh-full p-5">
            <h1 class="text-center p-3">Film Title</h1>
            <div class="one-film-placeholder m-1 full-height text-center mx-auto"></div>
            <div class="d-flex align-content-start flex-wrap p-3 justify-content-center">
                <div class="film-info m-1">
                    <ul class="list-group">
                        <li class="list-group-item">Release date: </li>
                        <li class="list-group-item">Synopsis: 
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere sequi unde obcaecati quibusdam porro nostrum? Mollitia, deserunt quas, magnam, repellendus incidunt ad nulla sequi eveniet rem earum facere? Vero, quis.</p>
                        </li>
                    </ul>
                </div>
                <div class="film-info m-1 pl-3">
                        <ul class="list-group">
                                <li class="list-group-item">List of actors.</li>
                                <li class="list-group-item">Lorem, ipsum dolor.</li>
                                <li class="list-group-item">Lorem, ipsum.</li>
                                <li class="list-group-item">Lorem ipsum dolor sit amet consectetur.</li>
                        </ul>
                </div>


        

            <div class="p-3 mx-auto">
                    <ul class="list-group">
                            <li class="list-group-item">
                                <h5>Review 1</h5>
                                <div><a href="">By User's Fname and Lname</a></div>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis provident aliquam animi consequuntur laboriosam rem ullam a illo voluptas totam, quod vitae labore? At sapiente neque tempora possimus, in laudantium.</p>
                            </li>
                            <li class="list-group-item">
                                <h5>Review 2</h5>
                                <div><a href="">By User's Fname and Lname</a></div>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis provident aliquam animi consequuntur laboriosam rem ullam a illo voluptas totam, quod vitae labore? At sapiente neque tempora possimus, in laudantium.</p>
                            </li>
                            <li class="list-group-item">
                                <h5>Review 3</h5>
                                <div><a href="">By User's Fname and Lname</a></div>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis provident aliquam animi consequuntur laboriosam rem ullam a illo voluptas totam, quod vitae labore? At sapiente neque tempora possimus, in laudantium.</p>
                            </li>
                        </ul>
            </div>

            <div class="p-3 mx-auto">
                <h2 class="m-4">Add a review for this movie</h2>
                <form action="">
                    <div class="form-group">
                        <textarea type="text" name="" class="form-control m-2" placeholder="Write your review here." id=""></textarea>
                        <input type="number" name="" class="form-control m-2" placeholder="Type in your rating (0-100)" id="">
                        <button type="submit" class="btn btn-primary m-2">Submit</button>
                    </div>
                </form>
            </div>


        </div>

<?php include 'partials/footer.php' ?>