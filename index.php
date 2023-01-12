<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<section class="profile">
          <div
            class="profile__avatar"
            style="background-image: url('3220aa0123cd7dc3fc11.jpg')"
          >
            <div class="profile__edit-avatar">
              <button
                class="profile__edit-avatar-button"
                type="button"
                aria-label="Изменить аватар"
              ></button>
            </div>
          </div>
          <div class="profile__info">
            <div class="profile__name-container">
              <h1 class="profile__name">Жак-Ив Кусто</h1>
              <button
                class="profile__edit-button"
                type="button"
                aria-label="Редактировать"
              ></button>
            </div>
            <p class="profile__job">Исследователь океана</p>
          </div>
          <button
            class="profile__add-button"
            type="button"
            aria-label="Добавить"
          ></button>
        </section>
        <section class="elements" aria-label="Места">
          <ul class="elements__container"></ul>
        </section>

<?php get_footer(); ?>
