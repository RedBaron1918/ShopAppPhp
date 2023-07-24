
<div class="modal fade " id="exampleModalS" tabindex="-1" aria-labelledby="exampleModalLabelS" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content ">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Sign-in</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="" action="../../loginSystem/login.inc.php" method="post">
                                <div class="mb-3 ">
                                    <input type="email" name="email" class="form-control" placeholder="Email" />
                                </div>
                                <div class="mb-5">
                                    <input type="password" name="password" class="form-control" placeholder="Password" />
                                </div>
                            </form>
                            <a href="../public/components/loginSystem/reset-password.php">forgot your password?</a>
                            <?php
                            if (isset($_GET['error'])) {
                                if ($_GET['error'] == 'emptyinput') {
                                    echo "<p>Fill in all fields!</p>";
                                } else if ($_GET['error'] == 'wronglogin') {
                                    echo "<p>Incorrect login info!</p>";
                                }
                            }
                            ?>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal" name="submit">
                                Sign-in
                            </button>
                        </div>
                    </div>
                </div>
            </div>