<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.index',compact('contacts'));
    }

    public function update(Request $request, Contact $contact)
    {
        // dd($request);
        $contact->update([
            "adress" => $request->adress,
            "email" => $request->email,
            "telephone" => $request->telephone,
            "twitter_link" => $request->twitter_link,
            "facebook_link" => $request->facebook_link,
            "instagram_link" => $request->instagram_link,
            "linkedin_link" => $request->linkedin_link,
        ]);
    return redirect()->back()->with('message','Les informations de contact ont été mises à jour avec succès !!');
    }


    public function sendMail(Request $request)
    {
        $mail = new PHPMailer(true);
        try {
            // Configuration du serveur SMTP
            $mail->isSMTP();
            $mail->Host       = 'smtp.example.com'; // Ton serveur SMTP
            $mail->SMTPAuth   = true;
            $mail->Username   = 'ton_email@example.com'; // Ton adresse email SMTP
            $mail->Password   = 'ton_mot_de_passe'; // Ton mot de passe SMTP
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Activer le chiffrement TLS
            $mail->Port       = 587; // Le port SMTP utilisé pour TLS

            // Destinataires
            $mail->setFrom('ton_email@example.com', 'Ton Nom');
            $mail->addAddress('destinataire@example.com', 'Nom Destinataire'); // Ajouter un destinataire

            // Pièces jointes (optionnel)
            // $mail->addAttachment('/chemin/vers/fichier.jpg'); // Ajouter une pièce jointe

            // Contenu de l'email
            $mail->isHTML(true);
            $mail->Subject = 'Voici le sujet';
            $mail->Body    = 'Voici le <b>contenu HTML</b> du mail.';
            $mail->AltBody = 'Voici le contenu texte brut pour les clients qui ne supportent pas le HTML';

            $mail->send();
            echo 'Message envoyé avec succès';
        } catch (Exception $e) {
            echo "Le message n'a pas pu être envoyé. Erreur de Mailer: {$mail->ErrorInfo}";
        }
    }
}
