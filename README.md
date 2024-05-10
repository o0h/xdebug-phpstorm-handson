# 「XdebugとPhpStormを使って「難しめ」なコードを読んでみよう！」ハンズオンリソース
## このリポジトリについて
このリポジトリは、[XdebugとPhpStormを使って「難しめ」なコードを読んでみよう！](https://zenn.dev/o0h/books/coadreading-with-phpstorm-and-xdebug)のためのリソースです。

コードリーディングの題材となるソースコード及び利用するツール・ライブラリ情報や、PhpStormのプロジェクト設定が含まれます。  
詳細は[ハンズオン資料](https://zenn.dev/o0h/books/coadreading-with-phpstorm-and-xdebug)をご覧ください。

## 動作要件
全てのPHPプログラムは、Dockerコンテナ環境下で動かすことを意図しています。  
そのため、読者はDockerを扱うための環境や知識を有することを前提とします。  
また、PhpStorm利用のためのハンズオンを実施するためのものなので、PhpStormユーザーであることも前提とします。

### 執筆時の利用環境
- Docker環境: OrbStack 1.4.3 
- PhpStorm環境: PhpStorm 2024.1.1


## 環境構築
コンテナの構築に関する情報は、[./.runtime](./.runtime)ディレクトリ配下に収納しています。  
例えば、次のDocker Composeコマンドを利用して、コンテナの構築・起動が可能です。

```shell
docker compose -f .runtime/compose.yaml up
```

基本的にはPhpStorm上からコンテナを操作することになりますので、CLI等からの直接の操作は、必要に応じて利用してください。
