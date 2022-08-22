import './css/app.scss';
import './styles/app.css';
import {Dropdown} from 'bootstrap';

const $ = require('jquery');
// this "modifies" the jquery module: adding behavior to it
// the bootstrap module doesn't export/return anything
require('bootstrap');
document.addEventListener('DOMContentLoaded', () => {
    new App();
});

class App {
    
    colorSchemeLocalStorageKey;

    constructor() {
        this.colorSchemeLocalStorageKey = 'blog/colorScheme';

        this.createColorSchemeSelector();
        this.enableDropdowns();
        this.handleCommentForm();
    }

    createColorSchemeSelector() {
        if (null === document.querySelector('.dropdown-appearance')) {
            return;
        }

        const currentScheme = localStorage.getItem(this.colorSchemeLocalStorageKey) || 'auto';
        const colorSchemeSelectors = document.querySelectorAll('.dropdown-appearance a[data-color-scheme]');
        const activeColorSchemeSelector = document.querySelector(`.dropdown-appearance a[data-color-scheme="${currentScheme}"]`);

        colorSchemeSelectors.forEach((selector) => { selector.classList.remove('active') });
        activeColorSchemeSelector.classList.add('active');

        colorSchemeSelectors.forEach((selector) => {
            selector.addEventListener('click', () => {
                const selectedColorScheme = selector.getAttribute('data-color-scheme');
                const resolvedColorScheme = 'auto' === selectedColorScheme
                    ? matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
                    : selectedColorScheme;

                document.body.classList.remove('light-scheme', 'dark-scheme');
                document.body.classList.add('light' === resolvedColorScheme ? 'light-scheme' : 'dark-scheme');
                document.body.style.colorScheme = resolvedColorScheme;
                localStorage.setItem(this.colorSchemeLocalStorageKey, selectedColorScheme);

                colorSchemeSelectors.forEach((otherSelector) => { otherSelector.classList.remove('active') });
                selector.classList.add('active');
            });
        });
    }

    enableDropdowns() {
        const dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
        dropdownElementList.map(function (dropdownToggleEl) {
            return new Dropdown(dropdownToggleEl);
        });
    }

    handleCommentForm() {
        const commentForm = document.querySelector('form.comment-form')

        if (null === commentForm)  {
            return;
        }
        commentForm.addEventListener('submit', async (e) => {

            e.preventDefault();

            const response = await fetch('/ajax/comments', {
                method: 'POST',
                body: new FormData(e.target)
            });

            if (!response.ok) {
                return;
            }

            const json = await response.json();

            if (json.code === 'COMMENT_ADDED_SUCCESSFULLY'){
                console.log("Hi");
                const commentList = document.querySelector('.comment-list');
                const commentCount = document.querySelector('.comment-count');
                const commentContent = document.querySelector('#comment_content');
                commentList.insertAdjacentHTML('afterbegin', json.message);
                commentCount.innerText = json.numberOfComments;
                commentContent.value = '';
                
            }
        });

    }
}