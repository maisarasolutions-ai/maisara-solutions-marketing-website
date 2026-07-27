# QA Checklist

## Smoke Tests
- [ ] Homepage loads (https://maisarasolutions.com/en) -> 200 OK
- [ ] Arabic locale loads (https://maisarasolutions.com/ar) -> 200 OK
- [ ] Contact page loads -> 200 OK
- [ ] Health endpoint returns JSON -> 200 OK
- [ ] Contact form POST returns success

## Accessibility
- [ ] All pages have `lang` attribute
- [ ] Images have alt text (none currently)
- [ ] Color contrast meets WCAG AA
- [ ] RTL pages use `dir="rtl"` or appropriate classes

## Performance
- [ ] Page size < 2MB
- [ ] First contentful paint < 2s
- [ ] No 404s on static assets
- [ ] No console errors

## Cross-Browser
- [ ] Chrome (latest)
- [ ] Firefox (latest)
- [ ] Safari (latest)
- [ ] Mobile Chrome

## RTL Validation
- [ ] Arabic text aligns right
- [ ] Navigation mirrors correctly
- [ ] Forms display correctly
- [ ] No broken layout in RTL mode
