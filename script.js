// SunsetTableGo Interactive Script
document.addEventListener('DOMContentLoaded', () => {
    // 1. Interactive Sunset Feast Configurator
    const settingButtons = document.querySelectorAll('[data-setting]');
    const menuButtons = document.querySelectorAll('[data-menu]');
    const canopyButtons = document.querySelectorAll('[data-canopy]');
    
    const resultImg = document.getElementById('configResultImg');
    const resultTitle = document.getElementById('configResultTitle');
    const resultDesc = document.getElementById('configResultDesc');
    const specTiming = document.getElementById('specTiming');
    const specCourses = document.getElementById('specCourses');
    const specPairing = document.getElementById('specPairing');

    const configPresets = {
        'coastal': {
            title: 'Pacific Bluff Sunset Banquet',
            desc: 'Overlooking ocean breakers at golden hour with open-hearth grilled wild catch and botanical sea salt infusions.',
            img: 'images/coastal-bluff-sunset-supper.jpg',
            timing: '18:30 Sunset',
            courses: '5-Course Feast',
            pairing: 'Citrus Thyme Tonic'
        },
        'orchard': {
            title: 'Ancient Olive Grove Hearth Supper',
            desc: 'Communal long-table setting under heritage olive branches with wood-fired sourdough and heirloom garden harvests.',
            img: 'images/golden-hour-orchard-long-table.jpg',
            timing: '19:15 Sunset',
            courses: '4-Course Harvest',
            pairing: 'Rosemary Pear Press'
        },
        'mountain': {
            title: 'High-Altitude Ridge Sunset Feast',
            desc: 'Panoramic alpine twilight vistas paired with smoked root vegetables, braised delicacies, and warm cedar infusions.',
            img: 'images/mountain-view-sunset-banquet.jpg',
            timing: '18:00 Sunset',
            courses: '5-Course Hearth',
            pairing: 'Smoked Lavender Tea'
        },
        'garden': {
            title: 'Twilight Secret Garden Pavilion',
            desc: 'Intimate candlelight tablescape surrounded by blooming jasmine, flame-roasted flatbreads, and sparkling botanical cordials.',
            img: 'images/intimate-twilight-garden-dinner.jpg',
            timing: '19:45 Twilight',
            courses: '4-Course Garden',
            pairing: 'Elderflower Citron'
        }
    };

    function updateConfigurator() {
        const activeSetting = document.querySelector('[data-setting].active')?.dataset.setting || 'coastal';
        const preset = configPresets[activeSetting] || configPresets['coastal'];
        
        if (resultTitle) resultTitle.textContent = preset.title;
        if (resultDesc) resultDesc.textContent = preset.desc;
        if (resultImg) resultImg.src = preset.img;
        if (specTiming) specTiming.textContent = preset.timing;
        if (specCourses) specCourses.textContent = preset.courses;
        if (specPairing) specPairing.textContent = preset.pairing;
    }

    settingButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            settingButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            updateConfigurator();
        });
    });

    menuButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            menuButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
        });
    });

    canopyButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            canopyButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
        });
    });

    // 2. FAQ Accordion
    const faqCards = document.querySelectorAll('.faq-card');
    faqCards.forEach(card => {
        const header = card.querySelector('.faq-header');
        header.addEventListener('click', () => {
            const isOpen = card.classList.contains('open');
            faqCards.forEach(c => c.classList.remove('open'));
            if (!isOpen) {
                card.classList.add('open');
            }
        });
    });

    // 3. Form Feedback
    const forms = document.querySelectorAll('.cta-form, #newsletterForm, #contactForm');
    forms.forEach(form => {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const btn = form.querySelector('button[type="submit"]');
            const originalText = btn ? btn.innerHTML : 'Submit';
            if (btn) {
                btn.innerHTML = 'Table Reserved ✓';
                btn.style.background = '#27ae60';
            }
            alert('Your Sunset Table reservation inquiry has been received. Our hospitality concierge will confirm seating details within 24 hours.');
            setTimeout(() => {
                if (btn) {
                    btn.innerHTML = originalText;
                    btn.style.background = '';
                }
                form.reset();
            }, 3000);
        });
    });

    // 4. Mobile Menu Toggle
    const mobileBtn = document.querySelector('.mobile-toggle');
    const navLinks = document.querySelector('.nav-links');
    if (mobileBtn && navLinks) {
        mobileBtn.addEventListener('click', () => {
            if (navLinks.style.display === 'flex') {
                navLinks.style.display = 'none';
            } else {
                navLinks.style.display = 'flex';
                navLinks.style.flexDirection = 'column';
                navLinks.style.position = 'absolute';
                navLinks.style.top = '70px';
                navLinks.style.left = '0';
                navLinks.style.width = '100%';
                navLinks.style.background = '#12131a';
                navLinks.style.padding = '24px';
                navLinks.style.borderBottom = '1px solid rgba(160,163,189,0.2)';
            }
        });
    }
});
