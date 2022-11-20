document.addEventListener('DOMContentLoaded', () => {
    const cboTheme = document.querySelector('#cbo-theme')

    cboTheme.checked = localStorage.getItem('dayTheme') === 'true'
    cboTheme.addEventListener('change', () => localStorage.setItem('dayTheme', cboTheme.checked))
})