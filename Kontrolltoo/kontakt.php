<?php $pageTitle = 'Kontakt - Muusikapood'; $currentPage = 'contact'; include 'header.php'; ?>

    <div class="container my-5">
        <h2>Kontakt</h2>
        <div class="row">
            <div class="col-md-6">
                <h3>Google Maps</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2245.5!2d24.7536!3d59.4369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4692934f3c2b2b2b%3A0x4b5b5b5b5b5b5b5b!2sTallinn!5e0!3m2!1sen!2see!4v1234567890" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe> <!-- Asenda oma asukohaga -->
            </div>
            <div class="col-md-6">
                <h3>Kontaktivorm</h3>
                <form method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nimi</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Sõnum</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Saada</button>
                </form>
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    echo '<p class="mt-3 text-success">Sõnum saadetud!</p>'; // Lihtne, saad lisada email saatmise
                }
                ?>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>