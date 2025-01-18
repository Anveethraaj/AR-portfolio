<form action="https://formspree.io/f/xanngeqw" method="POST">
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" required />

    <label for="email">Your Email:</label>
    <input type="email" id="email" name="email" required />

    <label for="subject">Subject:</label>
    <input type="text" id="subject" name="subject" />

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="5" required></textarea>

    <button type="submit">Send Message</button>
</form>

<div id="status"></div>

<script>
    const form = document.querySelector('form');
    const status = document.getElementById('status');

    form.addEventListener('submit', async (event) => {
        event.preventDefault();
        const formData = new FormData(form);
        const response = await fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: { 'Accept': 'application/json' }
        });

        if (response.ok) {
            status.innerHTML = 'Thanks for your message! I will get back to you soon.';
            form.reset();
        } else {
            status.innerHTML = 'Oops! There was a problem submitting your form.';
        }
    });
</script>
