<div class="modal fade" id="exampleModalR" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Create Your Account</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="../loginSystem/signup.inc.php" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <input type="text" name="firstName" class="form-control" placeholder="First Name" />
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="lastName" class="form-control" placeholder="Last Name" />
                                </div>
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="Email" />
                                </div>
                                <div class="mb-3">
                                    <input type="password" name="password" class="form-control" placeholder="Password" />
                                </div>
                                <div class="mb-3">
                                    <input type="password" name="passwordRepeat" class="form-control" placeholder="Repeat Password" />
                                </div>
                            </form>
                            <?php
                            if (isset($_GET['error'])) {
                                if ($_GET['error'] == 'emptyinput') {
                                    echo "<p>Fill in all fields!</p>";
                                } else if ($_GET['error'] == 'invaliduid') {
                                    echo "<p>Chose a preper username!</p>";
                                } else if ($_GET['error'] == 'invalidemail') {
                                    echo "<p>Chose a preper email!</p>";
                                } else if ($_GET['error'] == 'passwordsdontmatch') {
                                    echo "<p>Password doesn't match!</p>";
                                } else if ($_GET['error'] == 'stmtfailed') {
                                    echo "<p>Something went wrong ,try again </p>";
                                } else if ($_GET['error'] == 'usernametaken') {
                                    echo "<p>Username already taken</p>";
                                } else if ($_GET['error'] == 'none') {
                                    echo "<p>You have signed up!</p>";
                                }
                            }
                            ?>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">
                                Create account
                            </button>
                        </div>
                    </div>
                </div>
            </div>