<?php

$errors = [];

if (!empty($_POST)) {
    // Validation du champ nom
    if (!isset($_POST['name']) || empty($_POST['name'])) {
        $errors[] = "Please enter your name";
    } else {
        $name = trim(htmlentities($_POST['name']));
    }

    // Validation du champ email
    if (!isset($_POST['email']) || empty($_POST['email'])) {
        $errors[] = "Please enter your email address";
    } else {
        $email = trim(htmlentities($_POST['email']));
    }

    // Validation du champ sujet
    if (!isset($_POST['subject']) || empty($_POST['subject'])) {
        $errors[] = "Please enter your subject";
    } else {
        $subject = trim(htmlentities($_POST['subject']));
    }

    // Validation du champ message non obligatoire
    if (isset($_POST['message']) && !empty($_POST['message'])) {
        $message = trim(htmlentities($_POST['message']));
    }

    // Redirection avec erreurs
    if (empty($errors)) {
        header('Location: _validation.php');
        exit();
    }
}

?>

<section class="form-container" id="contact">
   <h2>Get in touch</h2>
    <?php if (!empty($errors)) : ?>
        <div class="errors">
        <h3>Please fix errors below</h3>
        <ul>
            <?php foreach ($errors as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
        </div>
    <?php endif; ?>
  
    <form action="" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" >

        <label for="email">Email</label>
        <input type="email" id="email" name="email" >

        <label for="subject">Subject</label>
        <select name="subject" id="subject">
            <option value="Prendre rendez-vous">Make an appointment</option>
            <option value="Demander un devis">Request a quote</option>
            <option value="M'inscrire à la newsletter">Sign up for the newsletter</option>
            <option value="Reclamation">Reclamation</option>
        </select>

        <label for="message">Message</label>
        <textarea id="message" name="message"></textarea>

        <input type="submit" value="Send">
    </form>
</section>
