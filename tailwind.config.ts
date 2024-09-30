// https://tailwindcss.com/docs/configuration
import type { Config } from 'tailwindcss';
import forms from '@tailwindcss/forms';

export default {
  content: [
    './app/**/*.php',
    './resources/**/*.{php,js,ts,tsx,vue}',
    './resources/views/**/*.php',
    './public/content/themes/radicle/index.php',
  ],
  theme: {
    fontFamily: {
      sans: ['Roboto', 'sans-serif'],
    },
    fontSize: {
      'display-1': '56pt',
      'headline-1': '40pt',
      'headline-2': '32pt',
      'headline-3': '24pt',
      'headline-4': '20pt',
      'subhead-1': '24pt',
      'subhead-2': '16pt',
      'body-regular': '16pt',
      'body-regular_underline': '16pt',
      'body-bold': '16pt',
      'body-bold-underline': '16pt',
      'label-m': '16pt',
      'label-s-regular': '14pt',
      'label-s-medium': '14pt',
      'label-xs-regular': '12pt',
      'label-xs-bold': '12pt',
      'label-xs-regular-underlined': '12pt',
    },
    lineHeight: {
      '100': '100%',
      '115': '115%',
      '120': '120%',
      '135': '135%',
      '140': '140%',
    },
    letterSpacing: {
      '0': '0%',
      '-3': '-3%',
    },
    fontWeight: {
      bold: '700',
      medium: '500',
      regular: '400',
    },
    colors: {
      inherit: 'inherit',
      current: 'currentColor',
      transparent: 'transparent',
      black: '#000',
      white: '#fff',
      gray: {
        50: '#f9fafb',
        100: '#f3f4f6',
        200: '#e5e7eb',
        300: '#d1d5db',
        400: '#9ca3af',
        500: '#6b7280',
        600: '#4b5563',
        700: '#374151',
        800: '#1f2937',
        900: '#111827',
        950: '#030712',
      },
      indigo: {
        50: '#eef2ff',
        100: '#e0e7ff',
        200: '#c7d2fe',
        300: '#a5b4fc',
        400: '#818cf8',
        500: '#6366f1',
        600: '#4f46e5',
        700: '#4338ca',
        800: '#3730a3',
        900: '#312e81',
        950: '#1e1b4b',
      },
      primary: {
        green800: '#144733',
        green700: '#0F6442',
        green500: '#279968',
        green300: '#68BC8E',
        green100: '#AADDC2',
        green50: '#DAFAE7',
      },
      secondary: {
        blue: '#1D232B',
        yellow: '#FFD100',
        lightGreen: '#A3E35E',
      },
      status: {
        error: '#D20606',
        warning: '#FF6B00',
        confirmed: '#00CC99',
      },
      neutral: {
        900: '#000000',
        700: '#666666',
        500: '#B3B3B3',
        300: '#D5D5D5',
        200: '#F5F5F5',
        100: '#FBFBFB',
        50: '#FFFFFF',
      },
      service: {
        lightBlue: '#3D41B1',
        darkBlue: '#202376',
      },
      statusbar: {
        error: '#D20606',
        warning: '#FF6B00',
        confirmed: '#00CC99',
      },
      statusFlight: {
        voloCancellato: '#F37073',
        inRitardo: '#FFBC6E',
        imbarco: '#5D9EF5',
      },
    },
  },
  spacing: {
    'xxs': '16px',
    'xs': '24px',
    's': '32px',
    'm': '40px',
    'l': '56px',
    'xl': '64px',
    'xxl': '80px',
    'xxxl': '104px',
  },
  plugins: [
    forms,
  ],
} satisfies Config;
