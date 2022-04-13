/**
 * AdminLTE Demo Menu
 * ------------------
 * You should not use this file in production.
 * This file is for demo purposes only.
 */

/* eslint-disable camelcase */

(function ($) {
  'use strict'

  var $sidebar = $('.control-sidebar')
  var $container = $('<div />', {
    class: 'p-3 control-sidebar-content'
  })

  $sidebar.append($container)

  var navbar_dark_skins = [
    'navbar-primary sidebar_colors',
    'navbar-secondary sidebar_colors',
    'navbar-info sidebar_colors',
    'navbar-success sidebar_colors',
    'navbar-danger sidebar_colors',
    'navbar-indigo sidebar_colors',
    'navbar-purple sidebar_colors',
    'navbar-pink sidebar_colors',
    'navbar-navy sidebar_colors',
    'navbar-lightblue sidebar_colors',
    'navbar-teal sidebar_colors',
    'navbar-cyan sidebar_colors',
    'navbar-dark sidebar_colors',
    'navbar-gray-dark sidebar_colors',
    'navbar-gray sidebar_colors'
  ]

  var navbar_light_skins = [
    'navbar-light sidebar_colors',
    'navbar-warning sidebar_colors',
    'navbar-white sidebar_colors',
    'navbar-orange sidebar_colors'
  ]

  $container.append(
    '<h5>Customize Dashboard</h5><hr class="mb-2"/>'
  )

  var $no_border_checkbox = $('<input />', {
    type: 'checkbox',
    value: 1,
    checked: $('.main-header').hasClass('border-bottom-0'),
    class: 'mr-1'
  }).on('click', function () {
    if ($(this).is(':checked')) {
      $('.main-header').addClass('border-bottom-0')
    } else {
      $('.main-header').removeClass('border-bottom-0')
    }
  })
  var $no_border_container = $('<div />', { class: 'mb-1' }).append($no_border_checkbox).append('<span>No Navbar border</span>')
  $container.append($no_border_container)

  var $text_sm_body_checkbox = $('<input />', {
    type: 'checkbox',
    value: 1,
    checked: $('body').hasClass('text-sm'),
    class: 'mr-1'
  }).on('click', function () {
    if ($(this).is(':checked')) {
      $('body').addClass('text-sm')
    } else {
      $('body').removeClass('text-sm')
    }
  })
  var $text_sm_body_container = $('<div />', { class: 'mb-1' }).append($text_sm_body_checkbox).append('<span>Body small text</span>')
  $container.append($text_sm_body_container)

  var $text_sm_header_checkbox = $('<input />', {
    type: 'checkbox',
    value: 1,
    checked: $('.main-header').hasClass('text-sm'),
    class: 'mr-1'
  }).on('click', function () {
    if ($(this).is(':checked')) {
      $('.main-header').addClass('text-sm')
    } else {
      $('.main-header').removeClass('text-sm')
    }
  })
  var $text_sm_header_container = $('<div />', { class: 'mb-1' }).append($text_sm_header_checkbox).append('<span>Navbar small text</span>')
  $container.append($text_sm_header_container)

  var $text_sm_sidebar_checkbox = $('<input />', {
    type: 'checkbox',
    value: 1,
    checked: $('.nav-sidebar').hasClass('text-sm'),
    class: 'mr-1'
  }).on('click', function () {
    if ($(this).is(':checked')) {
      $('.nav-sidebar').addClass('text-sm')
    } else {
      $('.nav-sidebar').removeClass('text-sm')
    }
  })
  var $text_sm_sidebar_container = $('<div />', { class: 'mb-1' }).append($text_sm_sidebar_checkbox).append('<span>Sidebar nav small text</span>')
  $container.append($text_sm_sidebar_container)

  var $text_sm_footer_checkbox = $('<input />', {
    type: 'checkbox',
    value: 1,
    checked: $('.main-footer').hasClass('text-sm'),
    class: 'mr-1'
  }).on('click', function () {
    if ($(this).is(':checked')) {
      $('.main-footer').addClass('text-sm')
    } else {
      $('.main-footer').removeClass('text-sm')
    }
  })
  var $text_sm_footer_container = $('<div />', { class: 'mb-1' }).append($text_sm_footer_checkbox).append('<span>Footer small text</span>')
  $container.append($text_sm_footer_container)

  var $flat_sidebar_checkbox = $('<input />', {
    type: 'checkbox',
    value: 1,
    checked: $('.nav-sidebar').hasClass('nav-flat'),
    class: 'mr-1'
  }).on('click', function () {
    if ($(this).is(':checked')) {
      $('.nav-sidebar').addClass('nav-flat')
    } else {
      $('.nav-sidebar').removeClass('nav-flat')
    }
  })
  var $flat_sidebar_container = $('<div />', { class: 'mb-1' }).append($flat_sidebar_checkbox).append('<span>Sidebar nav flat style</span>')
  $container.append($flat_sidebar_container)

  var $legacy_sidebar_checkbox = $('<input />', {
    type: 'checkbox',
    value: 1,
    checked: $('.nav-sidebar').hasClass('nav-legacy'),
    class: 'mr-1'
  }).on('click', function () {
    if ($(this).is(':checked')) {
      $('.nav-sidebar').addClass('nav-legacy')
    } else {
      $('.nav-sidebar').removeClass('nav-legacy')
    }
  })
  var $legacy_sidebar_container = $('<div />', { class: 'mb-1' }).append($legacy_sidebar_checkbox).append('<span>Sidebar nav legacy style</span>')
  $container.append($legacy_sidebar_container)

  var $compact_sidebar_checkbox = $('<input />', {
    type: 'checkbox',
    value: 1,
    checked: $('.nav-sidebar').hasClass('nav-compact'),
    class: 'mr-1'
  }).on('click', function () {
    if ($(this).is(':checked')) {
      $('.nav-sidebar').addClass('nav-compact')
    } else {
      $('.nav-sidebar').removeClass('nav-compact')
    }
  })
  var $compact_sidebar_container = $('<div />', { class: 'mb-1' }).append($compact_sidebar_checkbox).append('<span>Sidebar nav compact</span>')
  $container.append($compact_sidebar_container)

  var $child_indent_sidebar_checkbox = $('<input />', {
    type: 'checkbox',
    value: 1,
    checked: $('.nav-sidebar').hasClass('nav-child-indent'),
    class: 'mr-1'
  }).on('click', function () {
    if ($(this).is(':checked')) {
      $('.nav-sidebar').addClass('nav-child-indent')
    } else {
      $('.nav-sidebar').removeClass('nav-child-indent')
    }
  })
  var $child_indent_sidebar_container = $('<div />', { class: 'mb-1' }).append($child_indent_sidebar_checkbox).append('<span>Sidebar nav child indent</span>')
  $container.append($child_indent_sidebar_container)

  var $child_hide_sidebar_checkbox = $('<input />', {
    type: 'checkbox',
    value: 1,
    checked: $('.nav-sidebar').hasClass('nav-collapse-hide-child'),
    class: 'mr-1'
  }).on('click', function () {
    if ($(this).is(':checked')) {
      $('.nav-sidebar').addClass('nav-collapse-hide-child')
    } else {
      $('.nav-sidebar').removeClass('nav-collapse-hide-child')
    }
  })
  var $child_hide_sidebar_container = $('<div />', { class: 'mb-1' }).append($child_hide_sidebar_checkbox).append('<span>Sidebar nav child hide on collapse</span>')
  $container.append($child_hide_sidebar_container)

  var $no_expand_sidebar_checkbox = $('<input />', {
    type: 'checkbox',
    value: 1,
    checked: $('.main-sidebar').hasClass('sidebar-no-expand'),
    class: 'mr-1'
  }).on('click', function () {
    if ($(this).is(':checked')) {
      $('.main-sidebar').addClass('sidebar-no-expand')
    } else {
      $('.main-sidebar').removeClass('sidebar-no-expand')
    }
  })
  var $no_expand_sidebar_container = $('<div />', { class: 'mb-1' }).append($no_expand_sidebar_checkbox).append('<span>Main Sidebar disable hover/focus auto expand</span>')
  $container.append($no_expand_sidebar_container)

  var $text_sm_brand_checkbox = $('<input />', {
    type: 'checkbox',
    value: 1,
    checked: $('.brand-link').hasClass('text-sm'),
    class: 'mr-1'
  }).on('click', function () {
    if ($(this).is(':checked')) {
      $('.brand-link').addClass('text-sm')
    } else {
      $('.brand-link').removeClass('text-sm')
    }
  })
  var $text_sm_brand_container = $('<div />', { class: 'mb-1' }).append($text_sm_brand_checkbox).append('<span>Brand small text</span>')
  $container.append($text_sm_brand_container)

  var $dark_mode_checkbox = $('<input />', {
    type: 'checkbox',
    value: 1,
    checked: $('body').hasClass('dark-mode'),
    class: 'mr-1'
  }).on('click', function () {
    if ($(this).is(':checked')) {
      $('body').addClass('dark-mode')
    } else {
      $('body').removeClass('dark-mode')
    }
  })
  var $dark_mode_container = $('<div />', { class: 'mb-4' }).append($dark_mode_checkbox).append('<span>Dark Mode</span>')
  $container.append($dark_mode_container)

  $container.append('<h6>Navbar Variants</h6>')

  var $navbar_variants = $('<div />', {
    class: 'd-flex lists_colors'
  })
  var navbar_all_colors = navbar_dark_skins.concat(navbar_light_skins)
  var $navbar_variants_colors = createSkinBlock(navbar_all_colors, function () {
    var color = $(this).data('color')
    var $main_header = $('.main-header')
    $main_header.removeClass('navbar-dark').removeClass('navbar-light')
    navbar_all_colors.forEach(function (color) {
      $main_header.removeClass(color)
    })

    if (navbar_dark_skins.indexOf(color) > -1) {
      $main_header.addClass('navbar-dark')
    } else {
      $main_header.addClass('navbar-light')
    }

    $main_header.addClass(color)
  })

  $navbar_variants.append($navbar_variants_colors)

  $container.append($navbar_variants)

  var sidebar_colors = [
    'bg-primary sidebar_colors',
    'bg-warning sidebar_colors',
    'bg-info sidebar_colors',
    'bg-danger sidebar_colors',
    'bg-success sidebar_colors',
    'bg-indigo sidebar_colors',
    'bg-lightblue sidebar_colors',
    'bg-navy sidebar_colors',
    'bg-purple sidebar_colors',
    'bg-fuchsia sidebar_colors',
    'bg-pink sidebar_colors',
    'bg-maroon sidebar_colors',
    'bg-orange sidebar_colors',
    'bg-lime sidebar_colors',
    'bg-teal sidebar_colors',
    'bg-olive sidebar_colors'
  ]

  var accent_colors = [
    'accent-primary sidebar_colors',
    'accent-warning sidebar_colors',
    'accent-info sidebar_colors',
    'accent-danger sidebar_colors',
    'accent-success sidebar_colors',
    'accent-indigo sidebar_colors',
    'accent-lightblue sidebar_colors',
    'accent-navy sidebar_colors',
    'accent-purple sidebar_colors',
    'accent-fuchsia sidebar_colors',
    'accent-pink sidebar_colors',
    'accent-maroon sidebar_colors',
    'accent-orange sidebar_colors',
    'accent-lime sidebar_colors',
    'accent-teal sidebar_colors',
    'accent-olive sidebar_colors'
  ]

  var sidebar_skins = [
    'sidebar-dark-primary sidebar_colors',
    'sidebar-dark-warning sidebar_colors',
    'sidebar-dark-info sidebar_colors',
    'sidebar-dark-danger sidebar_colors',
    'sidebar-dark-success sidebar_colors',
    'sidebar-dark-indigo sidebar_colors',
    'sidebar-dark-lightblue sidebar_colors',
    'sidebar-dark-navy sidebar_colors',
    'sidebar-dark-purple sidebar_colors',
    'sidebar-dark-fuchsia sidebar_colors',
    'sidebar-dark-pink sidebar_colors',
    'sidebar-dark-maroon sidebar_colors',
    'sidebar-dark-orange sidebar_colors',
    'sidebar-dark-lime sidebar_colors',
    'sidebar-dark-teal sidebar_colors',
    'sidebar-dark-olive sidebar_colors',
    'sidebar-light-primary sidebar_colors',
    'sidebar-light-warning sidebar_colors',
    'sidebar-light-info sidebar_colors',
    'sidebar-light-danger sidebar_colors',
    'sidebar-light-success sidebar_colors',
    'sidebar-light-indigo sidebar_colors',
    'sidebar-light-lightblue sidebar_colors',
    'sidebar-light-navy sidebar_colors',
    'sidebar-light-purple sidebar_colors',
    'sidebar-light-fuchsia sidebar_colors',
    'sidebar-light-pink sidebar_colors',
    'sidebar-light-maroon sidebar_colors',
    'sidebar-light-orange sidebar_colors',
    'sidebar-light-lime sidebar_colors',
    'sidebar-light-teal sidebar_colors',
    'sidebar-light-olive sidebar_colors'
  ]

  $container.append('<h6>Accent Color Variants</h6>')
  var $accent_variants = $('<div />', {
    class: 'd-flex'
  })
  $container.append($accent_variants)
  $container.append(createSkinBlock(accent_colors, function () {
    var color = $(this).data('color')
    var accent_class = color
    var $body = $('body')
    accent_colors.forEach(function (skin) {
      $body.removeClass(skin)
    })

    $body.addClass(accent_class)
  }))

  $container.append('<h6>Dark Sidebar Variants</h6>')
  var $sidebar_variants_dark = $('<div />', {
    class: 'd-flex'
  })
  $container.append($sidebar_variants_dark)
  $container.append(createSkinBlock(sidebar_colors, function () {
    var color = $(this).data('color')
    var sidebar_class = 'sidebar-dark-' + color.replace('bg-', '')
    var $sidebar = $('.main-sidebar')
    sidebar_skins.forEach(function (skin) {
      $sidebar.removeClass(skin)
    })

    $sidebar.addClass(sidebar_class)
  }))

  $container.append('<h6>Light Sidebar Variants</h6>')
  var $sidebar_variants_light = $('<div />', {
    class: 'd-flex'
  })
  $container.append($sidebar_variants_light)
  $container.append(createSkinBlock(sidebar_colors, function () {
    var color = $(this).data('color')
    var sidebar_class = 'sidebar-light-' + color.replace('bg-', '')
    var $sidebar = $('.main-sidebar')
    sidebar_skins.forEach(function (skin) {
      $sidebar.removeClass(skin)
    })

    $sidebar.addClass(sidebar_class)
  }))

  var logo_skins = navbar_all_colors
  $container.append('<h6>Brand Logo Variants</h6>')
  var $logo_variants = $('<div />', {
    class: 'd-flex'
  })
  $container.append($logo_variants)
  var $clear_btn = $('<a />', {
    href: '#'
  }).text('clear').on('click', function (e) {
    e.preventDefault()
    var $logo = $('.brand-link')
    logo_skins.forEach(function (skin) {
      $logo.removeClass(skin)
    })
  })
  $container.append(createSkinBlock(logo_skins, function () {
    var color = $(this).data('color')
    var $logo = $('.brand-link')
    logo_skins.forEach(function (skin) {
      $logo.removeClass(skin)
    })
    $logo.addClass(color)
  }).append($clear_btn))

  function createSkinBlock(colors, callback) {
    var $block = $('<div />', {
      class: 'd-flex flex-wrap mb-3'
    })

    colors.forEach(function (color) {
      var $color = $('<div />', {
        class: (typeof color === 'object' ? color.join(' ') : color).replace('navbar-', 'bg-').replace('accent-', 'bg-') + ' elevation-2'
      })

      $block.append($color)

      $color.data('color', color)

      $color.css({
        width: '40px',
        height: '20px',
        borderRadius: '25px',
        marginRight: 10,
        marginBottom: 10,
        opacity: 0.8,
        cursor: 'pointer'
      })

      $color.hover(function () {
        $(this).css({ opacity: 1 }).removeClass('elevation-2').addClass('elevation-4')
      }, function () {
        $(this).css({ opacity: 0.8 }).removeClass('elevation-4').addClass('elevation-2')
      })

      if (callback) {
        $color.on('click', callback)
      }
    })

    return $block
  }

  $('.product-image-thumb').on('click', function () {
    var image_element = $(this).find('img')
    $('.product-image').prop('src', $(image_element).attr('src'))
    $('.product-image-thumb.active').removeClass('active')
    $(this).addClass('active')
  })
})(jQuery)
