<?= $this->extend('theme/template') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">

		<p>The following items have been reported to the CodeIgniter core team and addressed as potential security
            concerns. Not all of them will affect your sites, but you should periodically review this list to
            determine any threats.
        </p>

        <p>These disclosures are primarily aimed at the website and surrounding environment. Security disclosures
            affecting the framework will be handled through GitHub's built-in Security Advisors functionality.
        </p>


        <section class="well disclosure">
            <h1>codeigniter.com Email Spoofing</h1>

            <p>Oct 25, 2021 - <b>The MX</b> reported that the codeigniter.com domain was able to be used for email
                spoofing due to the lack of a DKIM record. We updated the DNS to include a DKIM record as a result.
            </p>
        </section>
    </div>
</div>
<?= $this->endSection() ?>
