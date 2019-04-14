---
title: 'Ask us for a quote'
media_order: contact-bg.jpg
smallTitle: Contact
menu: contact
visible: true
background: contact-bg.jpg
cache_enable: false
opacity: '0.75'

form:
    name: kontakt-ajax-form
    template: form-messages
    action: /home
    refresh_prevention: true
    fields:
        -
            name: name
            label: false
            placeholder: Name
            autofocus: 'off'
            autocomplete: 'on'
            type: text
            outerclasses: form-field
            classes: full-width
        -
            name: email
            label: false
            placeholder: 'Email adress'
            type: email
            outerclasses: form-field
            classes: full-width
        -
            name: phone
            label: false
            type: text
            placeholder: Contact Phone
            outerClasses: form-field
            classes: full-width
        -
            name: message
            label: false
            placeholder: Message. Please include whether you have an existing website.
            type: textarea
            outerclasses: form-field
            classes: full-width
            rows: null
        -
            name: website
            label: false
            type: text
            placeholder: Existing Site (if applicable)
            outerClasses: form-field
            classes: full-width
    buttons:
        -
            type: submit
            value: Submit
            outerclasses: form-field
            classes: 'full-width btn--primary'
    process:
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to:
                    - '{{ config.plugins.email.from }}'
                    - '{{ form.value.email }}'
                subject: '[Message from] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            message: 'Thank you for you''re message! We will contact you shortly'
---

We build websites for small businesses and charities interested in greening their digital carbon footprint. We stay local, concentrating on the London area and surroundings. 