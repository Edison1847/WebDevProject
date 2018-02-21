<!--Render Lower Buttons after table-->
                </div>
                <div id="lowerButtonsInfo">
                    <form action="form.php" method="post">
                        <input type="hidden" name="queueSubmit" value="<?php echo $patient_Id; ?> ">
                        <input id="queueSubmitId" type="submit" value="Add to Clinic Queue" name="buttonQueueSubmit">
                        <a href="home.php">Back</a>
                    </form>
                </div>
            </section>
            <footer class="footerInfo">
                <P align="center">COPYRIGHTS RESERVED BY BMI GROUP C</P>
            </footer>
        </main>
    </body>
</html>