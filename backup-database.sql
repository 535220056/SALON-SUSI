PGDMP                      |            NewDB    16.3    16.3 G    D           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            E           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            F           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            G           1262    16397    NewDB    DATABASE     ~   CREATE DATABASE "NewDB" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'English_Indonesia.1252';
    DROP DATABASE "NewDB";
                postgres    false            �            1259    16653 
   categories    TABLE       CREATE TABLE public.categories (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    description text NOT NULL,
    image character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.categories;
       public         heap    postgres    false            �            1259    16652    categories_id_seq    SEQUENCE     z   CREATE SEQUENCE public.categories_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.categories_id_seq;
       public          postgres    false    225            H           0    0    categories_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.categories_id_seq OWNED BY public.categories.id;
          public          postgres    false    224            �            1259    16690    category_menu    TABLE     d   CREATE TABLE public.category_menu (
    category_id bigint NOT NULL,
    menu_id bigint NOT NULL
);
 !   DROP TABLE public.category_menu;
       public         heap    postgres    false            �            1259    16629    failed_jobs    TABLE     &  CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.failed_jobs;
       public         heap    postgres    false            �            1259    16628    failed_jobs_id_seq    SEQUENCE     {   CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.failed_jobs_id_seq;
       public          postgres    false    221            I           0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;
          public          postgres    false    220            �            1259    16662    menus    TABLE     *  CREATE TABLE public.menus (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    description text NOT NULL,
    image character varying(255) NOT NULL,
    price numeric(10,2) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.menus;
       public         heap    postgres    false            �            1259    16661    menus_id_seq    SEQUENCE     u   CREATE SEQUENCE public.menus_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.menus_id_seq;
       public          postgres    false    227            J           0    0    menus_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.menus_id_seq OWNED BY public.menus.id;
          public          postgres    false    226            �            1259    16603 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap    postgres    false            �            1259    16602    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public          postgres    false    216            K           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public          postgres    false    215            �            1259    16621    password_resets    TABLE     �   CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 #   DROP TABLE public.password_resets;
       public         heap    postgres    false            �            1259    16641    personal_access_tokens    TABLE     �  CREATE TABLE public.personal_access_tokens (
    id bigint NOT NULL,
    tokenable_type character varying(255) NOT NULL,
    tokenable_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    token character varying(64) NOT NULL,
    abilities text,
    last_used_at timestamp(0) without time zone,
    expires_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 *   DROP TABLE public.personal_access_tokens;
       public         heap    postgres    false            �            1259    16640    personal_access_tokens_id_seq    SEQUENCE     �   CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.personal_access_tokens_id_seq;
       public          postgres    false    223            L           0    0    personal_access_tokens_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;
          public          postgres    false    222            �            1259    16681    reservations    TABLE     �  CREATE TABLE public.reservations (
    id bigint NOT NULL,
    first_name character varying(255) NOT NULL,
    last_name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    tel_number character varying(255) NOT NULL,
    res_date timestamp(0) without time zone NOT NULL,
    table_id bigint NOT NULL,
    guest_number integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
     DROP TABLE public.reservations;
       public         heap    postgres    false            �            1259    16680    reservations_id_seq    SEQUENCE     |   CREATE SEQUENCE public.reservations_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.reservations_id_seq;
       public          postgres    false    231            M           0    0    reservations_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.reservations_id_seq OWNED BY public.reservations.id;
          public          postgres    false    230            �            1259    16671    tables    TABLE     T  CREATE TABLE public.tables (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    guest_number integer NOT NULL,
    status character varying(255) DEFAULT 'available'::character varying NOT NULL,
    location integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.tables;
       public         heap    postgres    false            �            1259    16670    tables_id_seq    SEQUENCE     v   CREATE SEQUENCE public.tables_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.tables_id_seq;
       public          postgres    false    229            N           0    0    tables_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.tables_id_seq OWNED BY public.tables.id;
          public          postgres    false    228            �            1259    16610    users    TABLE     �  CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    is_admin boolean DEFAULT false NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.users;
       public         heap    postgres    false            �            1259    16609    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    218            O           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    217            �           2604    16656    categories id    DEFAULT     n   ALTER TABLE ONLY public.categories ALTER COLUMN id SET DEFAULT nextval('public.categories_id_seq'::regclass);
 <   ALTER TABLE public.categories ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    225    224    225            ~           2604    16632    failed_jobs id    DEFAULT     p   ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);
 =   ALTER TABLE public.failed_jobs ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    220    221    221            �           2604    16665    menus id    DEFAULT     d   ALTER TABLE ONLY public.menus ALTER COLUMN id SET DEFAULT nextval('public.menus_id_seq'::regclass);
 7   ALTER TABLE public.menus ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    226    227    227            {           2604    16606    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    215    216    216            �           2604    16644    personal_access_tokens id    DEFAULT     �   ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);
 H   ALTER TABLE public.personal_access_tokens ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    223    222    223            �           2604    16684    reservations id    DEFAULT     r   ALTER TABLE ONLY public.reservations ALTER COLUMN id SET DEFAULT nextval('public.reservations_id_seq'::regclass);
 >   ALTER TABLE public.reservations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    231    230    231            �           2604    16674 	   tables id    DEFAULT     f   ALTER TABLE ONLY public.tables ALTER COLUMN id SET DEFAULT nextval('public.tables_id_seq'::regclass);
 8   ALTER TABLE public.tables ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    228    229    229            |           2604    16613    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    217    218    218            :          0    16653 
   categories 
   TABLE DATA           Z   COPY public.categories (id, name, description, image, created_at, updated_at) FROM stdin;
    public          postgres    false    225   �T       A          0    16690    category_menu 
   TABLE DATA           =   COPY public.category_menu (category_id, menu_id) FROM stdin;
    public          postgres    false    232   'W       6          0    16629    failed_jobs 
   TABLE DATA           a   COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
    public          postgres    false    221   bW       <          0    16662    menus 
   TABLE DATA           \   COPY public.menus (id, name, description, image, price, created_at, updated_at) FROM stdin;
    public          postgres    false    227   W       1          0    16603 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public          postgres    false    216   �Y       4          0    16621    password_resets 
   TABLE DATA           C   COPY public.password_resets (email, token, created_at) FROM stdin;
    public          postgres    false    219   rZ       8          0    16641    personal_access_tokens 
   TABLE DATA           �   COPY public.personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, expires_at, created_at, updated_at) FROM stdin;
    public          postgres    false    223   <[       @          0    16681    reservations 
   TABLE DATA           �   COPY public.reservations (id, first_name, last_name, email, tel_number, res_date, table_id, guest_number, created_at, updated_at) FROM stdin;
    public          postgres    false    231   Y[       >          0    16671    tables 
   TABLE DATA           b   COPY public.tables (id, name, guest_number, status, location, created_at, updated_at) FROM stdin;
    public          postgres    false    229   ~\       3          0    16610    users 
   TABLE DATA              COPY public.users (id, name, email, email_verified_at, password, is_admin, remember_token, created_at, updated_at) FROM stdin;
    public          postgres    false    218   0]       P           0    0    categories_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.categories_id_seq', 19, true);
          public          postgres    false    224            Q           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
          public          postgres    false    220            R           0    0    menus_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.menus_id_seq', 20, true);
          public          postgres    false    226            S           0    0    migrations_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.migrations_id_seq', 9, true);
          public          postgres    false    215            T           0    0    personal_access_tokens_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);
          public          postgres    false    222            U           0    0    reservations_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.reservations_id_seq', 26, true);
          public          postgres    false    230            V           0    0    tables_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.tables_id_seq', 21, true);
          public          postgres    false    228            W           0    0    users_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.users_id_seq', 11, true);
          public          postgres    false    217            �           2606    16660    categories categories_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.categories
    ADD CONSTRAINT categories_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.categories DROP CONSTRAINT categories_pkey;
       public            postgres    false    225            �           2606    16637    failed_jobs failed_jobs_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       public            postgres    false    221            �           2606    16639 #   failed_jobs failed_jobs_uuid_unique 
   CONSTRAINT     ^   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);
 M   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_uuid_unique;
       public            postgres    false    221            �           2606    16669    menus menus_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.menus
    ADD CONSTRAINT menus_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.menus DROP CONSTRAINT menus_pkey;
       public            postgres    false    227            �           2606    16608    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public            postgres    false    216            �           2606    16627 $   password_resets password_resets_pkey 
   CONSTRAINT     e   ALTER TABLE ONLY public.password_resets
    ADD CONSTRAINT password_resets_pkey PRIMARY KEY (email);
 N   ALTER TABLE ONLY public.password_resets DROP CONSTRAINT password_resets_pkey;
       public            postgres    false    219            �           2606    16648 2   personal_access_tokens personal_access_tokens_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_pkey;
       public            postgres    false    223            �           2606    16651 :   personal_access_tokens personal_access_tokens_token_unique 
   CONSTRAINT     v   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);
 d   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_token_unique;
       public            postgres    false    223            �           2606    16688    reservations reservations_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.reservations
    ADD CONSTRAINT reservations_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.reservations DROP CONSTRAINT reservations_pkey;
       public            postgres    false    231            �           2606    16679    tables tables_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.tables
    ADD CONSTRAINT tables_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.tables DROP CONSTRAINT tables_pkey;
       public            postgres    false    229            �           2606    16620    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public            postgres    false    218            �           2606    16618    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    218            �           1259    16649 8   personal_access_tokens_tokenable_type_tokenable_id_index    INDEX     �   CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);
 L   DROP INDEX public.personal_access_tokens_tokenable_type_tokenable_id_index;
       public            postgres    false    223    223            �           2606    16693 /   category_menu category_menu_category_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.category_menu
    ADD CONSTRAINT category_menu_category_id_foreign FOREIGN KEY (category_id) REFERENCES public.categories(id);
 Y   ALTER TABLE ONLY public.category_menu DROP CONSTRAINT category_menu_category_id_foreign;
       public          postgres    false    4760    232    225            �           2606    16698 +   category_menu category_menu_menu_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.category_menu
    ADD CONSTRAINT category_menu_menu_id_foreign FOREIGN KEY (menu_id) REFERENCES public.menus(id);
 U   ALTER TABLE ONLY public.category_menu DROP CONSTRAINT category_menu_menu_id_foreign;
       public          postgres    false    227    4762    232            :   1  x�m��r� ���S��&q��|�.vǚر��RO7!	�H���k���$Em���^q�a��8@�$���̩���0N	HN��RIB�&�,�f�`)���'@E��@
�I\��6�8e���!���^@�M���$@�5[��lX'�&�]�[$z��fzؼ�4������=?���װ ���K�Cg���*@SU3�� h̥ 2M�jUR�¤��j��e��V��3�P��*Le�I�3;�����J�3R�T_�]ݣ&�hV����q�p�����CF�w���C����S��e�n�¿Y�n"��wF��'獒\�Ce5S�@BS&l���
(�T����5��O�3a�m�d�%���2t8>�d��b22�p�O����a����&�'/��/��a��������gŻsL�8�Θ�dRڏF1׶7�gh��mV>���{/&c������p:���IR4�~v�u#�iBϵ�#f
�*㬰b��`.ˊc�b�s�;����u=��Rh���CƂ��)tbY����ŏ� 
{���"��r�t\�����      A   +   x�ı  ���9)j��w��`߅6f8�;ܜ\}��      6      x������ � �      <     x�u�Ks�@���+z7��t� _��)j6�- L��it��2l�>}��w�i$2�����ze� �4o�g\���zD���3~[�~OG���S�<��Lm���)�_�,A�d. ҺD�RRo.%�C22�� B�����G$ī�r�M��ȱHb�QN*p!�Ӝ�Y����竞�1I�k���O��Wc'�����-k����ޜ�FI�i`
ƙ����(��n5D�Y$3�<oȾ�k�t{����lP��=��!����n��%�	D�G�uf�c�1�ӆ,�mއ�Y(�Gy^R PE�8���:���u�4��)��0��+��%�
�UM�o=�������ʢ��Pц�/q��c�h���˲�d"+��4��R�S�[S �T�W9�"�Yz	���ߕ�H��'cH��ﾱ�ZKv]�(��D���ܝեO�go$�������*���Dy��#�u�>�� ��5H+�Իv�� ��{vZ��lcG������E��K��]�	�_G5�Ĕ>���e? ���      1   �   x�]�K� ���a �ޥ�u��Zh@���_TY��~�d��B��t�q��ѓ�8躧�����/��ǺyR"cR!/1޻䪻�Z��:q5����9l?�I��=�!� ��<�"4���\�e��u�Z�⠥��z�<a��p"I��D�ʸ��CgM����>9���2�w�e	$��c?1��      4   �   x�e��
�0  �s{�^���ϩH*��?"��a:M�>}�����9L�\h�>I�xdPj`�����8�1U�
�M�ݷ��=jc�Ώv+u�7�$�7Mz�	��tc6�l@�#�G�u��`��Nc�?]��R�W�^��+|u��؎ę8�֯��Ҹ�Ui�}s�o�!��F�l�+ ��jB      8      x������ � �      @     x����N� ��3O��ff�p2���7���iݚ4����n�!7�I�����:/�𹤯��Xv�tމ���i~���#� ,J֫=�;wl#S$�`�4D樾Ɛ���Y� 7�\[c�C��v�{���G㢘C�bͣ��z+��q�}��<���w�8?�9�ݍ8�|)�C�Ǝ}9K�~Ԯ#)�CiM�/_�n+���	5�9smb�	Eu'q؉U7��c(���|����c����ǆ5/���C%T�'����kyt�ç ���      >   �   x����
�0��s�}�I�f��Q=x��T�a8P�S|{� 2������O�
���p��	���.��j*�D+
Gǜ4$Rː�o���;����i�a�-R;j�2�y��n;�&�V��zNlr\T������B�e(�����0���M�hW����}�      3     x�m�K��:@��+\�v0	��j����[�f����_u�oUwO6��Y$�N� � e���4'�$���N?vH�f$J�ȸ?�u/�l�6��u�ŭѷ�^��$�N���L[��q��[��f�*����0���@�/ �j�:�t�X�W�m�u���#"�ζ��^��g�g�]������~����&��zX1}�k�������=tI�`1^�Q�K��H^a�T�W���v�銓M��CW]}M]�	D��lֈ�)�CI�A�#E��x�C����� ˿��
4�I)_�N_�fg�HV�z.��6ƠI��=S��PZ��^$�\�����`c��$Q�
����e�,$2/�.>f�
��66��nF���^�c��=���fex��
��YH�Q���$��o�>g �N�d\H^�~�u���W*�PT��<���|�D�\Np�XF��}ׁj�:u��!%�$�%#>���2�\B�v'MJ�N���<��i����Gs4Gӫ5u�0����.������]�,�Cnp�e�s�"��'�gE��o����[\�����^7��c ��$�����E�'5�%8��Qq5�<+u�����.h[Gm�lA���bw�d�Bz��c-/4�J�I�X��d�0��sVv�-#9-i2�V�Q#�����r��w��V�śJ �������(���H�[��<��^�Pb1^�B�u�����*An��*<H�-�,3���M>u�I����j�e�T���i� ���C�b����� 2=�     