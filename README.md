# Multibucket Migrate

Allow moving users between buckets in a multibucket setup.

## Usage

Move all objects owned by a user to a different bucket.

```bash
occ multibucket_migrate:move_user <user_id> <target_bucket>
```

Note: this can take a long time if the user owns a lot of data